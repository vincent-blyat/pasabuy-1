<?php

namespace App\Http\Controllers;

use App\Models\userAddress;
use App\Models\userInformation;
use App\Models\userLanguages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userInformationController extends Controller
{
    //
    public function getPersonal()
    {
        # code...
        $user = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userInformation WHERE  email = \''.$user->email.'\'');
    
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

    public function editPersonal(Request $request)
    {
        # code...
      
        $request->validate([
             'firstname' => ['required'],
             'lastname' => ['required'],
             'phone_number' => ['required'],
             'gender' => '',
             'birdate' => ['required'],
             'language' => ['required']
        ]);
        
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
            }
            else{
                $userLang = userLanguages::where('email',Auth::User()->email)->first();
                $userLang->languages = $request->language;
                $userLang->save();
                return response()->json('success, information saved');
            }
            
        }
        else{
            return response()->json('error, information not saved');
        }

    }

    public function editAddress(Request $request)
    {
        # code...
      
        $request->validate([
             'house_number' => ['required'],
             'province' => ['required'],
             'city' => ['required'],
             'barangay' => ['required']
        ]);
        
        //updating userinfo table
        $userEmail = Auth::User()->email;
        $user = userAddress::where('email',$userEmail)->first();
        $user->houseNumber = $request->house_number;
        $user->province = $request->province;
        $user->cityMunicipality = $request->city;
        $user->barangay = $request->barangay;
       
        if($user->save()){
            return response()->json('success, information saved');
        }
        else{
            return response()->json('error, information not saved');
        }
    }


}
