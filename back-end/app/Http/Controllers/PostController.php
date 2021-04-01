<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\OfferPost;
use App\Models\RequestPost;

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
		$request->validate([
            'email' => ['required', 'email', 'max:50'],
            'postIdentity' => ['required', 'max:100'],
            'postStatus' => ['required', 'max:50'],
            'deliveryArea' => ['required', 'max:500'],
            'shoppingPlace' => ['required', 'max:2000'],
            'deliverySchedule' => ['required', 'date'],
            'transportMode' => ['required', 'max:200'],
            'capacity' => ['required', 'max:100'],
            'paymentMethod' => ['required', 'max:200'],
            'caption' => ['required', 'max:200'],
            'isLoggedIn' => ['required', 'boolean']
		]);

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

			// save to database
			DB::transaction(function() use ($post, $offer_post) {

				$post->save();
				$post->offer_post()->save($offer_post);
			});

			return response()->json(['message' => 'Offer post successfully created.'], 201);
		}
		else {

			return response->json(['error' => 'You are not logged in.'], 401);
		}
	}

	/**
	 *    [create_request_post save request post on database]
	 *    @author Al Vincent Musa
	 *    @param  Request $request [description]
	 *    @return [type]           [description]
	 */
	public function create_request_post(Request $request) {

		// validate data
		$request->validate([
			'email' => 'required|email',
			'postIdentity' => 'required|string|max:100',
			'postStatus' => 'required|string|max:50',
			'deliveryAddress' => 'required|string|max:500',
			'shoppingPlace' => 'required|string|max:500',
			'deliverySchedule' => 'required|date',
			'paymentMethod' => 'required|string|max:200',
			'shoppingList' => 'required|string|max:2000',
			'caption' => 'required|string|max:200',
			'isLoggedIn' => ['required', 'boolean']
		]);
		
		// check if the user is logged in
		if($request->isLoggedIn) {

			// post model
			$post = new Post;
			$post->email = $request->email;
			$post->postIdentity = $request->postIdentity;
			$post->postStatus = $request->postStatus;

			// request post model
			$request_post = new RequestPost;
			$request_post->postStatus = $request->postStatus;
			$request_post->deliveryAddress = $request->deliveryAddress;
			$request_post->shoppingPlace = $request->shoppingPlace;
			$request_post->deliverySchedule = $request->deliverySchedule;
			$request_post->paymentMethod = $request->paymentMethod;
			$request_post->shoppingList = $request->shoppingList;
			$request_post->caption = $request->caption;

			// save to database
			DB::transaction(function() use ($post, $request_post) {

				$post->save();
				$post->request_post()->save($request_post);
			});

			return response()->json([
				'message' => 'Request post successfully created.'
			], 201);
		}
		else {

			return response()->json([
				'error' => 'You are not logged in.'
			], 401);
		}
	}
    
}
