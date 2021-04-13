<?php

namespace App\Http\Controllers;

use App\Mail\emailConfirmation;
use App\Models\User;
use App\Models\userAddress;
use App\Models\userInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //

    private $personalInfo; //temp storage for tbl_userInformation 
    private $accountInfo; //temp storage for tbl_userAuthentication
    private $addressInfo; //temp storage for tbl_useraddress


    //function to put personal info in $personalInfo and  $accountInfo; 
    function postPersonal(Request $request){
        
        // custom error messages
       $messages = ['password.regex' => array(' Must contain at least one lowercase letter (a – z)',
                                            ' Must contain at least one uppercase letter (A – Z)',
                                            ' Must contain at least one digit (0-9)',
                                            ' Must contain a special character',
                     )];
       $validator=Validator::make($request->all(),[
            'firstName' => ['required','regex:/^[a-zA-Z]+$/'],
            'lastName' => ['required','regex:/^[a-zA-Z]+$/'],
            'email' => ['required','email','unique:tbl_userAuthentication'],
            'phoneNumber' => ['required','numeric','digits:11'],
            'password' => ['required',
                            'min:8',
                            'confirmed',
                            'regex:/[a-z]/',      // must contain at least one lowercase letter
                            'regex:/[A-Z]/',      // must contain at least one uppercase letter
                            'regex:/[0-9]/',      // must contain at least one digit
                            'regex:/[@$!%*#?&]/', // must contain a special character
                        ],
            ],$messages);

        if($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        
        // $user = new User();
        // $user->email = $request->email;
        // $user->password = $request->password;

        $this->personalInfo = ['email'=> $request->email, 'firstName' => $request->firstName, 'lastName' => $request->lastName,'phoneNumber'=> $request->phoneNumber];
        $this->accountInfo = ['email'=> $request->email, 'password' => $request->password];
        $code = mt_rand(100000, 999999);
        $data =[
            'name' => $request->firstName,
            'verification_code' => $code
        ];

        //return response()->json(trim($request->email));
        $email = trim($request->email);   
        $code = Hash::make($code);

        $returnValue = ['personalInfo'=>  $this->personalInfo,'account'=>  $this->accountInfo, 'code'=>$code ];
        if($request != null){
            Mail::to($email)->send(new emailConfirmation($data));
            return response()->json($returnValue);
        }
        return response()->json($returnValue);
     }


     //function to put personal info in $addressInfo
    function postAddress(Request $request){

        $request->validate([
            'houseNumber' => ['required'],
            'province' => ['required'],
            'barangay' => ['required'],
            'cityMunicipality' => ['required'],
       ]);

       $this->addressInfo = ['houseNumber'=> $request->houseNumber, 'province'=> $request->province,'barangay'=> $request->barangay,'cityMunicipality'=> $request->cityMunicipality];
       
        
        return response()->json( $this->addressInfo);
    }

     //function to put personal info in $addressInfo
     function postID(Request $request){


    }


    //this is the function to call to save the data in database
    function register(Request $request){

       
        
        $userInfo = new userInformation();
        $userInfo->email = $request->email;
        $userInfo->firstName = $request->firstName;
        $userInfo->lastName = $request->lastName;
        $userInfo->phoneNumber = $request->phoneNumber;

        if($userInfo->save()){
            $userAuth = new user();
            $userAuth->email = $request->email;
            $userAuth->password = Hash::make($request->password);
            
            if($userAuth->save()){
                $userAddress = new userAddress();
                $userAddress->email = $request->email;
                $userAddress->houseNumber = $request->houseNumber;
                $userAddress->province = $request->province;
                $userAddress->barangay = $request->barangay;
                $userAddress->cityMunicipality = $request->cityMunicipality;
                
                $userAddress->save();
                
                return true; 
            }
            else{
                return response()->json('error, information address not saved'); 
            }
            
        }else{
            return response()->json('error, information address not saved'); 
        }

    }
   
    public function confirmCode(Request $request)
    {
        # code...
        if(Hash::check($request->textCode, $request->code)){
            return response()->json(true); 
        }else{
            return response()->json(['error'=>'Error, Code doesn\'t match.'], 422); 
        }
    }
  
}
