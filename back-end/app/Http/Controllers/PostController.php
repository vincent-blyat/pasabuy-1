<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\OfferPost;

class PostController extends Controller
{

	/**
	 *    [create_offer_post save shopping offer post on database]
	 *    @author Al Vincent Musa
	 *    @param  Request $request [http request]
	 *    @return Illumiinate\Http\Response           [json response]
	 */
	public function create_offer_post(Request $request) {

		// validate data
		// $request->validate([
  //           'email' => ['required', 'email', 'max:50'],
  //           'postIdentity' => ['required', 'max:100'],
  //           'postStatus' => ['required', 'max:50'],
  //           'deliveryArea' => ['required', 'max:500'],
  //           'shoppingPlace' => ['required', 'max:2000'],
  //           'deliverySchedule' => ['required', 'date'],
  //           'transportMode' => ['required', 'max:200'],
  //           'capacity' => ['required', 'max:100'],
  //           'paymentMethod' => ['required', 'max:200'],
  //           'caption' => ['required', 'max:200'],
  //           'isLoggedIn' => ['required', 'boolean']
		// ]);


		// if logged in create offer post
		if($request->isLoggedIn) {

			$post = new Post;
			$post->email = $request->email;
			$post->postIdentity = $request->postIdentity;
			$post->postStatus = $request->postStatus;

			$offer_post = new OfferPost;
			$offer_post->postStatus = $request->postStatus;
			$offer_post->deliveryArea = $request->deliveryArea;
			$offer_post->shoppingPlace = $request->shoppingPlace;
			$offer_post->deliverySchedule = $request->deliverySchedule;
			$offer_post->transportMode = $request->transportMode;
			$offer_post->capacity = $request->capacity;
			$offer_post->paymentMethod = $request->paymentMethod;
			$offer_post->caption = $request->caption;

			$post->save();
			$post->offer_post()->save($offer_post);

			return response()->json(['message' => 'Offer post successfully created.'], 201);
		}
		else {

			return response->json(['error' => 'You are not logged in.'], 401);
		}
	}
    
}
