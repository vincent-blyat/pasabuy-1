<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\shoppingOffers;
//use App\Models\Messages;
use Illuminate\Http\Request;

class shoppingOffersController extends Controller
{
    function listShoppingOffers(){
        //return shoppingOffers::all();
        //return tbl_shoppingofferposts::All();
        $data = shoppingOffers::with('posts','posts.user')
        ->whereHas('posts', function($query){
            $query->where('email', Auth::user()->email);
        })->join('tbl_post', 'tbl_shoppingOfferPost.postNumber', '=', 'tbl_post.postNumber')
        ->orderBy('tbl_post.dateCreated', 'desc')->get();
        return $data;
    }

    public function editshoppingoffers(Request $request){
        $request->validate([
            'indexShoppingOfferPost' => ['required'],
            'postNumber' => ['required'],
            'postStatus' => ['required'],
            'deliveryArea' => ['required'],
            'shoppingPlace' => ['required'],
            'deliverySchedule' => ['required'],
            'transportMode' => ['required'],
            'capacity' => ['required'],
            'paymentMethod' => ['required'],
            'caption' => ['required']
       ]);

        $record = shoppingOffers::where('indexShoppingOfferPost',$request->indexShoppingOfferPost)->first();
        $record->postNumber  = $request->postNumber ;
        $record->postStatus = $request->postStatus;
        $record->deliveryArea = $request->deliveryArea;
        $record->shoppingPlace = $request->shoppingPlace;
        $record->deliverySchedule = $request->deliverySchedule;
        $record->transportMode = $request->transportMode;
        $record->capacity = $request->capacity;
        $record->paymentMethod = $request->paymentMethod;
        $record->caption = $request->caption;
        $record->save();
        // return $record;
        // if($record->save()){
        //     return response()->json(['message'=>'Success, Information saved'],200);
        // }
        // else{
        //     return response()->json(['error'=>'An error occured'],422);
        // }
    }

    // function update(){
    //     return shoppingOffers::update('update tbl_shoppingOfferPost set deliveryArea = 100 where indexShoppingOfferPost  = 3');
    // }
        
}
