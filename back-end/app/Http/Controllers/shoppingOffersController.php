<?php

namespace App\Http\Controllers;
use App\Models\shoppingOffers;
use Illuminate\Http\Request;

class shoppingOffersController extends Controller
{
    function listShoppingOffers(){
        return shoppingOffers::all();
        //return tbl_shoppingofferposts::All();
    }
}
