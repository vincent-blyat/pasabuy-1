<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\shoppingOrders;
use Illuminate\Http\Request;

class shoppingOrdersController extends Controller
{
    function listShoppingOrders(){
        //return shoppingOrders::all();
        //return tbl_shoppingofferposts::All();
        $data = shoppingOrders::with('posts','posts.user')
        ->whereHas('posts', function($query){
            $query->where('email', Auth::user()->email);
        })->join('tbl_post', 'tbl_orderrequestpost.postNumber', '=', 'tbl_post.postNumber')
        ->orderBy('tbl_post.dateCreated', 'desc')->get();
        return $data;
    }
}
