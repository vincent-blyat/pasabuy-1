<?php

namespace App\Http\Controllers;

use App\Models\userAddress;
use App\Models\userInformation;
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
            $provinces[$i]->provDesc=strtolower($provinces[$i]->provDesc);
            $provinces[$i]->provDesc=ucfirst($provinces[$i]->provDesc);
        }
        return $provinces;
    }
    function refcityMunicipality(Request $request){
        $data = DB::select('SELECT * FROM refcitymun WHERE provCode = \''.$request->provCode.'\' ORDER BY  citymunDesc');
        for ( $i=0; $i < sizeof($data);$i++){
            $data[$i]->citymunDesc=strtolower($data[$i]->citymunDesc);
            $data[$i]->citymunDesc=ucfirst($data[$i]->citymunDesc);
        }

        return response()->json($data);
    }
    function refBrgy(Request $request){
        $data = DB::select('SELECT * FROM refbrgy WHERE citymunCode = \''.$request->cityCode.'\'  ORDER BY brgyDesc');
        for ( $i=0; $i < sizeof($data);$i++){
            $data[$i]->brgyDesc=strtolower($data[$i]->brgyDesc);
            $data[$i]->brgyDesc=ucfirst($data[$i]->brgyDesc);
        }
        return response()->json($data);
    }

    public function editAddress(Request $request)
    {
        # code...
      
        $request->validate([
             'house_number' => ['required'],
             'province' => ['required'],
             'city' => ['required'],
             'barangay' => ['required'],
             'landmark' => ['required']
        ]);
        //updating userinfo table
        $userEmail = Auth::User()->email;
        $user = userAddress::where('email',$userEmail)->first();
        if($user==null){
            $user = new userAddress();
            $user->email = $userEmail;
        }
        if($request->province === "Choose Province" || $request->city === "Choose City/Municipality" || $request->barangay === "Brgy"){
            return response()->json(['error'=>'Please select a province, City/Municipality and Baranggay'],422);
        }
        $user->houseNumber = $request->house_number;
        $user->province = $request->province;
        $user->cityMunicipality = $request->city;
        $user->barangay = $request->barangay;
        $user->landMark = $request->landmark;
       
        if($user->save()){
            return response()->json(['message'=>'Success, Information saved'],200);
        }
        else{
            return response()->json(['error'=>'An error occured'],422);
        }
    }
    public function addNewShipping(Request $request)
    {
        # code...
      
        $request->validate([
             'house_number' => ['required'],
             'province' => ['required'],
             'city' => ['required'],
             'barangay' => ['required'],
             'landmark' => ['required'],
             
        ]);
        //updating userinfo table
        $userEmail = Auth::User()->email;
       
        if($request->province === "Choose Province" || $request->city === "Choose City/Municipality" || $request->barangay === "Brgy"){
            return response()->json(['error'=>'Please select a province, City/Municipality and Baranggay'],422);
        }
        $count = DB::table('tbl_userShippingAddress')->count();
        $user = userInformation::where('email', Auth::user()->email)->first();
        if(DB::table('tbl_userShippingAddress')->insert([
            'shippingAddressNumber'=> '115-'.str_pad($user->indexUserInformation,4,'0',STR_PAD_LEFT).'-'.str_pad($count+1,5,'0',STR_PAD_LEFT),
            'email' => $userEmail,
            'landMark' => $request->landmark,
            'houseNumber' => $request->house_number,
            'province' => $request->province,
            'cityMunicipality' => $request->city,
            'barangay' => $request->barangay
        ])){
            return response()->json(['message'=>'Success, Information saved'],200);
        }
        else{
            return response()->json(['error'=>'An error occured'],422);
        }
    }
    public function editShipping(Request $request)
    {
        # code...
      
        $request->validate([
             'house_number' => ['required'],
             'province' => ['required'],
             'city' => ['required'],
             'barangay' => ['required'],
             'landmark' => ['required'],

        ]);
        //updating userinfo table
        if($request->province === "Choose Province" || $request->city === "Choose City/Municipality" || $request->barangay === "Brgy"){
            return response()->json(['error'=>'Please select a province, City/Municipality and Baranggay'],422);
        }
        if(DB::table('tbl_userShippingAddress')
        ->where('shippingAddressNumber', $request->shippingAddnum)
        ->update([
            'landMark' => $request->landmark,
            'houseNumber' => $request->house_number,
            'province' => $request->province,
            'cityMunicipality' => $request->city,
            'barangay' => $request->barangay
        ])){
            return response()->json(['message'=>'Success, Information saved'],200);
        }
        else{
            return response()->json(['error'=>'An error occured'],422);
        }
    }
    public function getShippingAddress()

    {
        # code...
        $data = DB::select('SELECT * FROM tbl_usershippingAddress WHERE email = \''.Auth::user()->email.'\'');
        return $data;
    }

    public function getTransportModes()

    {
        # code...
        return DB::select('SELECT * FROM tbl_transportmode WHERE 1 ');

    }
    
    public function getShoppingPlaces()

    {
        # code...
        return DB::select('SELECT * FROM tbl_shoppingplace WHERE 1 ');
    }
    public function getNotAuthUserAddress(Request $request)
    {
        # code...
        $data = DB::select('SELECT * FROM tbl_userAddress WHERE email = \''.$request->email.'\'');
    
        if($data == null)
            return response()->json('');
        return response()->json($data[0]);

    }
}
