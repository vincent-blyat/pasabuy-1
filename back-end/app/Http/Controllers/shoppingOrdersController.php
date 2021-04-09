<?php

namespace App\Http\Controllers;
use App\Models\shoppingOrders;
use Illuminate\Http\Request;

class shoppingOrdersController extends Controller
{
    function listShoppingOrders(){
        return shoppingOrders::all();
        //return tbl_shoppingofferposts::All();
    }
}
