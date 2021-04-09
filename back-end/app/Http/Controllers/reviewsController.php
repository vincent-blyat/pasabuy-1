<?php

namespace App\Http\Controllers;
use App\Models\reviews;
use Illuminate\Http\Request;

class reviewsController extends Controller
{
    function listReviews(){
        return reviews::all();
        //return tbl_shoppingofferposts::All();
    }
}
