<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
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
    function refcityMunicipality(){
        return DB::select('SELECT * FROM refcitymun ORDER BY  citymunDesc');
    }
    function refBrgy(){
        return DB::select("SELECT * FROM refbrgy ORDER BY brgyDesc");
        
    }
}
