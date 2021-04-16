<?php

namespace App\Http\Controllers;

use App\Mail\emailConfirmation;
use App\Models\User;
use App\Models\Messages;
use App\Models\userAddress;
use App\Models\userInformation;
use App\Models\userLanguages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class userInformationController extends Controller
{
    //
    public function getPersonal()
    {
        # code...
        $user = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userInformation WHERE  email = \''.$user->email.'\'');
        $data[0]->profilePicture= utf8_encode($data[0]->profilePicture);
        return response()->json($data[0]);
    }

    public function getAddress()
    {
        # code...
        $user = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userAddress WHERE email = \''.$user->email.'\'');
    
        if($data == null)
            return response()->json('');
        return response()->json($data[0]);
    }

    public function getLanguages()
    {
        # code...
        $user = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userLanguages WHERE email = \''.$user->email.'\'');

        if($data == null)
            return response()->json('');
        return response()->json($data[0]);
    }

    public function getValidID()
    {
        # code...
        $user = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userid WHERE email = \''.$user->email.'\'');

        if($data == null)
            return response()->json('');
        return response()->json($data[0]);
    }

     public function confirmUser(Request $request)
    {
        # code...
        $validator=Validator::make($request->all(),[
            'password' => ['required'],
            'email' => ['required','email','unique:tbl_userAuthentication']
       ]);
        if($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $hashedPassword = Auth::user()->getAuthPassword();
        if (Hash::check( $request->password,  $hashedPassword)) {
            $code = mt_rand(100000, 999999);
            $data =[
                'name' => $request->firstName,
                'verification_code' =>  $code
            ];
            $email = trim($request->email);   
            $returnValue = ['code'=>Hash::make($code) ];
            if($request != null){
                Mail::to($email)->send(new emailConfirmation($data));
                return response()->json($returnValue,200);
            }
            return response()->json(['error'=>'An error occured'],422);
        }else{
            return response()->json(['password'=>'Incorrect Password'],422);
        }
    }

    public function changeEmail(Request $request)
    {
        # code...
        if (Hash::check( $request->typeCode,  $request->code)){
            $user = userInformation::where('email',Auth::user()->email)->first();
            $user->email = $request->email;
            if($user->save()){
                return response()->json(['message'=>'Successfully changed email'],200);
            }else{
                return response()->json(['error'=>'An error occured'],422);
            }
           
        }else{
            return response()->json(['error'=>'Incorrect Code'],422);
        }

    }

    public function changePassword(Request $request)
    {
        # code...
        $messages = ['password.regex' => ' Must contain at least one lowercase letter (a – z).
                        Must contain at least one uppercase letter (A – Z).
                        Must contain at least one digit (0-9).'
                    ];
        $validator=Validator::make($request->all(),[
            'currentPassword' => ['required'],
            'password' => ['required',
                            'confirmed',
                            'min:8',
                            'regex:/[a-z]/',      // must contain at least one lowercase letter
                            'regex:/[A-Z]/',      // must contain at least one uppercase letter
                            'regex:/[0-9]/',      // must contain at least one digit
                        ],],$messages);
        if($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $hashedPassword = Auth::user()->getAuthPassword();
        if (Hash::check( $request->currentPassword,  $hashedPassword)){
            $user = User::where('email',Auth::user()->email)->first();
            $user->password = Hash::make($request->password);
            if($user->save()){
               return response()->json(['message'=>'Successfully changed password'],200);
            }else{
                return response()->json(['error'=>'An error occured'],422);
            }
        }else{
            return response()->json(['password'=>'Incorrect current password'],422);
        }

    }

    public function updateProfilePic(Request $request)
    {
        # code...
        $validator=Validator::make($request->all(),[
            'photo' => 'required|file|image',
        ]);
        if($validator->fails()) {
            return response()->json($validator->errors(),422);
        }

        $contents = file_get_contents($request->photo->path());
        $user = userInformation::where('email',Auth::user()->email)->first();
        $user->profilePicture = $contents;
        if($user->save()){
            return response()->json(['message'=>'Profilce Picture successfully changed.'],200);
        }else{
            return response()->json(['error'=>'Something went wrong'],422);
        }
    }

    public function editPersonal(Request $request)
    {
        # code...
        $validator=Validator::make($request->all(),[
            'firstname' => ['required','regex:/^[\pL\s\-]+$/u','max:255'],
             'lastname' => ['required','regex:/^[\pL\s\-]+$/u','max:255'],
             'phone_number' => ['required','numeric','digits:11'],
        ]);
        if($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        //updating userinfo table
        $userEmail = Auth::User()->email;
        $user = userInformation::where('email',$userEmail)->first();
        $user->firstName = $request->firstname;
        $user->lastName = $request->lastname;
        $user->phoneNumber = $request->phone_number;
        $user->gender = $request->gender;
        $user->birthDate = $request->birdate;
       
        if($user->save()){
            //updating user languages
            $userLang = userLanguages::find(Auth::User()->email);
            if($userLang == null){
                $userLang= new userLanguages();
                $userLang->email = Auth::User()->email;
                $userLang->userLanguageNumber = userLanguages::count()+1;
                $userLang->languages = $request->language;
                $userLang->save();
                return response()->json(['message'=>'Success, Information saved.'],200);
            }
            else{
                $userLang = userLanguages::where('email',Auth::User()->email)->first();
                $userLang->languages = $request->language;
                $userLang->save();
                return response()->json(['message'=>'Success, Information saved.'],200);
            }
            
        }
        else{
            return response()->json('error, information not saved');
        }

    }
  

}
