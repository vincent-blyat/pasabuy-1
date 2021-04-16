<?php

namespace App\Http\Controllers;

use App\Models\userAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;

class addressController extends Controller
{
    //
    function refProvince(){
        $provinces = DB::select('SELECT * FROM refprovince ORDER BY  provDesc');
        for ( $i=0; $i < sizeof($provinces);$i++){
            $provinces[i]=strtolower($provinces[i].provDesc);
            $provinces[i]=ucfirst($provinces[i].provDesc);
        }
        return $provinces;
    }
    function refcityMunicipality(Request $request){
        $data = DB::select('SELECT * FROM refcitymun WHERE provCode = \''.$request->provCode.'\' ORDER BY  citymunDesc');
        return response()->json($data);
    }
    function refBrgy(Request $request){
        $data = DB::select('SELECT * FROM refbrgy WHERE citymunCode = \''.$request->cityCode.'\'  ORDER BY brgyDesc');
        return response()->json($data);
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
        if($user==null){
            $user = new userAddress();
            $user->email = $userEmail;
        }
        $user->houseNumber = $request->house_number;
        $user->province = $request->province;
        $user->cityMunicipality = $request->city;
        $user->barangay = $request->barangay;
       
        if($user->save()){
            return response()->json(['message'=>'Success, Information saved'],200);
        }
        else{
            return response()->json(['error'=>'An error occured'],422);
        }
    }
}
