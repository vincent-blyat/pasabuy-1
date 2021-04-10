<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\OfferPost;
use App\Models\RequestPost;
use Illuminate\Support\Facades\Auth;

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
            'postStatus' => ['required', 'string', 'max:50'],
            'deliveryArea' => ['required', 'max:500'],
            'shoppingPlace' => ['required', 'max:2000'],
            'deliverySchedule' => ['required', 'date'],
            'transportMode' => ['required', 'max:200'],
            'capacity' => ['required', 'max:100'],
            'paymentMethod' => ['required', 'max:200'],
            'caption' => ['required', 'max:200'],
		]);

		$user = Auth::User();

		$post = new Post;
		$post->email = $user->email;
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

		return response()->json(['message' => 'Offer post created successfully.'],201);
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
		]);

		$user = Auth::User()->email;

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
				'message' => 'Request post created successfully.'
			],
			201
		);
	}

	/**
	 *    [get_user_posts description]
	 *    @author Al Vincent Musa
	 *    @param  Request $request [description]
	 *    @param  [type]  $userId  [description]
	 *    @return [type]           [description]
	 */
	public function get_user_posts(Request $request) {

		$user = Auth::user();
		$data = DB::select("SELECT * FROM tbl_post post, tbl_shoppingOfferPost offer_post, tbl_orderRequestPost request_post WHERE post.postNumber = offer_post.postNumber OR post.postNumber = request_post.postNumber AND post.postDeleteStatus = 0 AND post.email = ?", [$user->email]);

		return response()->json([
				$data
			],
			200
		);
	}

	public function getAllPosts(Request $request) {

		$user = Auth::user();
		$data = Post::with('offer_post','request_post','get_user_name')->where('tbl_post.postDeleteStatus','=',0)->orderBy('tbl_post.dateCreated','desc')->get();

		return $data;
	}
    
}
