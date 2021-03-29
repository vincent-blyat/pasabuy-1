<?php

namespace App\Http\Controllers;

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
    
        return response()->json($data[0]);
    }

    public function getLanguages()
    {
        # code...
        $user = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userLanguages WHERE email = \''.$user->email.'\'');
    
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
        $user = userInformation::find(Auth::User()->email);
        $user = userInformation::where('email',Auth::User()->email)->first();
        $user->firstName = $request->firstname;
        $user->lastName = $request->lastname;
        $user->phoneNumber = $request->phone_number;
        $user->gender = $request->gender;
        $user->birthDate = $request->birdate;
        if($user->save()){
            //updating user languages
            $userLang = userLanguages::find(Auth::User()->email);
            $userLang = userLanguages::where('email',Auth::User()->email)->first();
            $userLang->language = $request->birthDate;
            $userLang->save();
            return response()->json('success, information saved');
        }
        else{
            return response()->json('error, information not saved');
        }

    }


}
