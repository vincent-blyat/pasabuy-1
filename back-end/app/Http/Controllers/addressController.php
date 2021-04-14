<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
class addressController extends Controller
{
    //
    function refProvince(){
        return DB::select('SELECT * FROM refprovince ORDER BY  provDesc');
    }
    function refcityMunicipality(Request $request){
        $data = DB::select('SELECT * FROM refcitymun WHERE provCode = \''.$request->provCode.'\' ORDER BY  citymunDesc');
        return response()->json($data);
    }
    function refBrgy(Request $request){
        $data = DB::select('SELECT * FROM refbrgy WHERE citymunCode = \''.$request->cityCode.'\'  ORDER BY brgyDesc');
        return response()->json($data);
    }
}
