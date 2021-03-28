<?php

namespace App\Http\Controllers;

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


}
