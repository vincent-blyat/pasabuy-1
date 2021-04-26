<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\OfferPost;
use App\Models\PasabuyUser;
use App\Models\RequestPost;
use App\Models\share;
use App\Models\User;
use App\Models\userAddress;
use App\Notifications\SharedNotification;
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

		//check if shopping place already exist in tbl_shoppingPlace
		$shoppingPlace = DB::select('SELECT * from tbl_shoppingPlace WHERE shoppingPlace = \''.$request->shoppingPlace.'\'');
		if($shoppingPlace == null){
			//save shopping place to tbl_shopping place
			DB::table('tbl_shoppingPlace')->insert([
				'shoppingPlace' => $request->shoppingPlace
			]);
		}
		//check if transport mode already exist in tbl_transportMOde
		$transport = DB::select('SELECT * from tbl_transportMode WHERE transportMode = \''.$request->transportMode.'\'');
		if($transport == null){
			//save transport mode to tbl_transportMode
			DB::table('tbl_transportMode')->insert([
				'transportMode' => $request->transportMode
			]);
		}
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
			'postIdentity' => 'required|string|max:100',
			'postStatus' => 'required|string|max:50',
			'deliveryArea' => 'required|string|max:500',
			'shoppingPlace' => 'required|string|max:500',
			'deliverySchedule' => 'required|date',
			'paymentMethod' => 'required|string|max:200',
			'shoppingList' => 'required|string|max:2000',
			'caption' => 'required|string|max:200',
		]);

		$user = Auth::User()->email;

		// post model
		$post = new Post;
		$post->email = $user;
		$post->postIdentity = $request->postIdentity;
		$post->postStatus = $request->postStatus;

		// request post model
		$request_post = new RequestPost;
		$request_post->postStatus = $request->postStatus;
		$request_post->deliveryAddress = $request->deliveryArea;
		$request_post->shoppingPlace = $request->shoppingPlace;
		$request_post->deliverySchedule = $request->deliverySchedule;
		$request_post->paymentMethod = $request->paymentMethod;
		$request_post->shoppingListNumber = $request->shoppingList;
		$request_post->caption = $request->caption;

			// save to database
		
		//check if shopping place already exist in tbl_shoppingPlace
		$shoppingPlace = DB::select('SELECT * from tbl_shoppingPlace WHERE shoppingPlace = \''.$request->shoppingPlace.'\'');
		if($shoppingPlace == null){
			//save shopping place to tbl_shopping place
			DB::table('tbl_shoppingPlace')->insert([
				'shoppingPlace' => $request->shoppingPlace,
			]);
		}
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
		// $data = PasabuyUser::has('post')->with('post','post.offer_post','post.request_post')->get();
		$data = Post::with('offer_post','request_post','user','request_post.shoppingList','share','share.user')->where('tbl_post.postDeleteStatus','=',0)->orderBy('tbl_post.dateCreated','desc')->get();

		return response()->json($data);
	}

	public function getAllShares(Request $request)
	{
		# code...
		// $data = Post::has('share')->with('offer_post','request_post','user','request_post.shoppingList','share.user')->whereHas('share', function($query){
        //     $query->where('shareDeleteStatus', 0)
		// 	->orderBy('dateCreated', 'desc');
        // })->get();
		$data = share::with('post','post.offer_post','post.request_post','post.user','post.request_post.shoppingList','user')->where('shareDeleteStatus','=',0)->orderBy('dateCreated','desc')->get();

		return response()->json($data);
	}
	
	public function sharePost(Request $request)
	{
		# code...
		$user = Auth::user();
		$postNum = $request->postNum;

		$newShare = new share();
		$newShare->sharerEmail = $user->email;
		$newShare->shareNumber = share::count()+1;
		$newShare->postNumber = $postNum;
		if($newShare->save()){
			//find the right user to notify, in this case the owner of the post
			$userToNotif = Post::where('postNumber',$postNum)->get();
			if($userToNotif[0]->email == $user->email){
				return response()->json(["message"=>'You have successfully shared this post'],200);
			}
			$userToNotif = User::where('email',$userToNotif[0]->email)->get();
			$userToNotif = User::find($userToNotif[0]->indexUserAuthentication);
			$userToNotif->notify(new SharedNotification($postNum));
			return response()->json(['message'=>'You have successfully shared this post'],200);
		}else{
			return response()->json(["Error"=>"An error occured"],500);
		}

		
	}


	/**
	 *    [getFeed description]
	 *    @author Al Vincent Musa
	 *    @param  Request $request [description]
	 *    @return [type]           [description]
	 */
	public function getFeeds(Request $request) {

		// validate $request
		$request->validate([
			'post_filter' => 'required|string|nullable',
			'post_type' => 'required|string|nullable'
		]);

		// get url parameters
		$params = $request->only(['post_filter', 'post_type']);

		$user = Auth::User();
		$user_info = userAddress::where('email', '=', $user->email)->firstOrFail();

		// data
		$data = [
			'data' => [
				'feeds' => ''
			]
		];

		switch ($params['post_filter']) {

			case 'following':
				
				switch ($params['post_type']) {
					
					case 'all':
						$followed_emails1 = DB::select("SELECT email2 as email from tbl_follow WHERE email1 = '$user->email' AND email1FollowEmail2 = 1");
						$followed_emails2 = DB::select("SELECT email1 as email from tbl_follow WHERE email2 = '$user->email' AND emaill2FollowEmail1 = 1");
						$followed_emails = array_merge($followed_emails1, $followed_emails2);		

						$followed_posts = [];

						foreach($followed_emails as $followed_user) {
							$feeds = DB::select("SELECT author.email, author.firstName as first_name, author.lastName as last_name, author.profilePicture as avatar, post.postNumber as id, post.postStatus as status, post.postIdentity as identity, offer.deliveryArea as offer_delivery_area, offer.shoppingPlace as offer_shopping_place, offer.deliverySchedule as offer_delivery_schedule, offer.transportMode as offer_transport_mode, offer.capacity, offer.paymentMethod as offer_payment_method, offer.caption as offer_caption, request.shoppingPlace as request_shopping_place, request.deliverySchedule as request_delivery_schedule, request.paymentMethod as request_payment_method, request.caption as request_caption, shopping_list.text as items FROM tbl_post post INNER JOIN tbl_userInformation author ON author.email = post.email LEFT JOIN tbl_shoppingOfferPost offer ON post.postNumber = offer.postNumber LEFT JOIN tbl_orderRequestPost request ON post.postNumber = request.postNumber LEFT JOIN tbl_shoppingList shopping_list ON shopping_list.shoppingListNumber = request.shoppingListNumber WHERE post.email = '$followed_user->email' AND post.postDeleteStatus = 0 ORDER BY post.dateCreated DESC");

							foreach($feeds as $feed) {
								$feed->avatar = utf8_encode($feed->avatar);
							}

							$followed_posts = array_merge($followed_posts, $feeds);
						}

						$data['data']['feeds'] = $followed_posts;

						return response()->json($data, 200);
						break;

					case 'offers':
						$followed_emails1 = DB::select("SELECT email2 as email from tbl_follow WHERE email1 = '$user->email' AND email1FollowEmail2 = 1");
						$followed_emails2 = DB::select("SELECT email1 as email from tbl_follow WHERE email2 = '$user->email' AND emaill2FollowEmail1 = 1");
						$followed_emails = array_merge($followed_emails1, $followed_emails2);		

						$followed_posts = [];

						foreach($followed_emails as $followed_user) {
							$feeds = DB::select("SELECT author.email, author.firstName as first_name, author.lastName as last_name, author.profilePicture as avatar, post.postNumber as id, post.postStatus as status, post.postIdentity as identity, offer.deliveryArea as delivery_area, offer.shoppingPlace as shopping_place, offer.deliverySchedule as schedule, offer.transportMode as transport_mode, offer.capacity, offer.paymentMethod as payment_method, offer.caption FROM tbl_userInformation author INNER JOIN tbl_post post ON author.email = post.email INNER JOIN tbl_shoppingOfferPost offer ON post.postNumber = offer.postNumber WHERE post.email = '$followed_user->email' AND post.postDeleteStatus = 0 ORDER BY post.dateCreated DESC");

							foreach($feeds as $feed) {
								$feed->avatar = utf8_encode($feed->avatar);
							}

							$followed_posts = array_merge($followed_posts, $feeds);
						}

						$data['data']['feeds'] = $followed_posts;
						
						return response()->json($data, 200);
						break;

					case 'requests':
						$followed_emails1 = DB::select("SELECT email2 as email from tbl_follow WHERE email1 = '$user->email' AND email1FollowEmail2 = 1");
						$followed_emails2 = DB::select("SELECT email1 as email from tbl_follow WHERE email2 = '$user->email' AND emaill2FollowEmail1 = 1");
						$followed_emails = array_merge($followed_emails1, $followed_emails2);		

						$followed_posts = [];

						foreach($followed_emails as $followed_user) {
							$feeds = DB::select("SELECT author.email, author.firstName as first_name, author.lastName as last_name, author.profilePicture as avatar, post.postNumber as id, post.postStatus as status, post.postIdentity as identity, request.deliveryAddress as delivery_area, request.shoppingPlace as shopping_place, request.deliverySchedule as schedule, request.paymentMethod as payment_method, request.caption, shopping_list.text as items FROM tbl_userInformation author INNER JOIN tbl_post post ON author.email = post.email INNER JOIN tbl_orderRequestPost request ON post.postNumber = request.postNumber LEFT JOIN tbl_shoppingList shopping_list ON shopping_list.shoppingListNumber = request.shoppingListNumber WHERE post.email = '$followed_user->email' AND post.postDeleteStatus = 0 ORDER BY post.dateCreated DESC");

							foreach($feeds as $feed) {
								$feed->avatar = utf8_encode($feed->avatar);
							}

							$followed_posts = array_merge($followed_posts, $feeds);
						}

						$data['data']['feeds'] = $followed_posts;
						
						return response()->json($data, 200);
						break;

					
					default:
						# code...
						break;
				}

				break;

			case 'nearby':

				switch ($params['post_type']) {
					
					case 'all':
						
						$feeds = DB::select("SELECT author.email, author.firstName as first_name, author.lastName as last_name, author.profilePicture as avatar, post.postNumber as id, post.postStatus as status, post.postIdentity as identity, offer.deliveryArea as offer_delivery_area, offer.shoppingPlace as offer_shopping_place, offer.deliverySchedule as offer_delivery_schedule, offer.transportMode as offer_transport_mode, offer.capacity as offer_capacity, offer.paymentMethod as offer_payment_method, offer.caption as offer_caption, request.shoppingPlace as request_shopping_place, request.deliverySchedule as request_delivery_schedule, request.paymentMethod as request_payment_method, request.caption as request_caption, shopping_list.text as items FROM tbl_post post INNER JOIN tbl_userInformation author ON author.email = post.email LEFT JOIN tbl_shoppingOfferPost offer ON post.postNumber = offer.postNumber LEFT JOIN tbl_orderRequestPost request ON post.postNumber = request.postNumber LEFT JOIN tbl_shoppingList shopping_list ON shopping_list.shoppingListNumber = request.shoppingListNumber WHERE offer.shoppingPlace = $user_info->cityMunicipality OR request.shoppingPlace = $user_info->cityMunicipality AND post.postDeleteStatus = 0 ORDER BY post.dateCreated DESC");

						foreach($feeds as $feed) {
							$feed->avatar = utf8_encode($feed->avatar);
						}

						$data['data']['feeds'] = $feeds;
		
						return response()->json($data, 200);
						break;

					case 'offers':
						// get nearby offers 
						$feeds = DB::select("SELECT author.email, author.firstName as first_name, author.lastName as last_name, author.profilePicture as avatar, post.postNumber as id, post.postStatus as status, post.postIdentity as identity, offer.deliveryArea as delivery_area, offer.shoppingPlace as shopping_place, offer.deliverySchedule as schedule, offer.transportMode as transport_mode, offer.capacity, offer.paymentMethod as payment_method, offer.caption FROM tbl_userInformation author INNER JOIN tbl_post post ON author.email = post.email INNER JOIN tbl_shoppingOfferPost offer ON post.postNumber = offer.postNumber WHERE offer.shoppingPlace = $user_info->cityMunicipality AND post.postDeleteStatus = 0 ORDER BY post.dateCreated DESC");

						foreach($feeds as $feed) {
							$feed->avatar = utf8_encode($feed->avatar);
						}

						$data['data']['feeds'] = $feeds;

						return response()->json($data, 200);

						break;

					case 'requests':
						//get nearby requests
						$feeds = DB::select("SELECT author.email, author.firstName as first_name, author.lastName as last_name, author.profilePicture as avatar, post.postNumber as id, post.postStatus as status, post.postIdentity as identity, request.deliveryAddress as delivery_area, request.shoppingPlace as shopping_place, request.deliverySchedule as schedule, request.paymentMethod as payment_method, request.caption, shopping_list.text as items FROM tbl_userInformation author INNER JOIN tbl_post post ON author.email = post.email INNER JOIN tbl_orderRequestPost request ON post.postNumber = request.postNumber LEFT JOIN tbl_shoppingList shopping_list ON shopping_list.shoppingListNumber = request.shoppingListNumber WHERE request.shoppingPlace = $user_info->cityMunicipality AND post.postDeleteStatus = 0 ORDER BY post.dateCreated DESC");

						foreach($feeds as $feed) {
							$feed->avatar = utf8_encode($feed->avatar);
						}
						
						$data['data']['feeds'] = $feeds;

						dd($data);
						
						return response()->json($data, 200);
						break;

					
					default:
						# code...
						break;
				}

				break;
			
			default:
				# code...
				break;
		}
	}
    
    /**
     *    edit posts
     *    @author Al Vincent Musa
     *    @param  Request $request [description]
     *    @return [type]           [description]
     */
    public function editPost(Request $request, $post_id) {

		// validate data
		$request->validate([
		    'postIdentity' => ['max:100'],
		    'postStatus' => ['string', 'max:50'],
		    'deliveryArea' => ['max:500'],
		    'shoppingPlace' => ['max:2000'],
		    'deliverySchedule' => ['date'],
		    'transportMode' => ['max:200'],
		    'capacity' => ['max:100'],
		    'paymentMethod' => ['max:200'],
		    'caption' => ['max:200'],
		    'deliveryAddress' => ['string', 'max:500'],
			'shoppingList' => ['string']
		]);

		$user = Auth::user();

		$post = Post::where('postNumber', '=', $post_id)->where('email', '=', $user->email)->firstOrFail();

		switch ($request->postIdentity) {
			case 'offer_post':
				
				$post->postIdentity = $request->postIdentity;
				$post->postStatus = $request->postStatus;

				$post->offer_post->postStatus = $request->postStatus;
				$post->offer_post->deliveryArea = $request->deliveryArea;
				$post->offer_post->shoppingPlace = $request->shoppingPlace;
				$post->offer_post->deliverySchedule = $request->deliverySchedule;
				$post->offer_post->transportMode = $request->transportMode;
				$post->offer_post->capacity = $request->capacity;
				$post->offer_post->paymentMethod = $request->paymentMethod;
				$post->offer_post->caption = $request->caption;

				DB::transaction(function() use ($post) {
					$post->save();
					$post->offer_post->save();
				});

				return 201;
				break;

			case 'request_post':

				$post->postIdentity = $request->postIdentity;
				$post->postStatus = $request->postStatus;

				$post->request_post->postStatus = $request->postStatus;
				$post->request_post->deliveryAddress = $request->deliveryAddress;
				$post->request_post->shoppingPlace = $request->shoppingPlace;
				$post->request_post->deliverySchedule = $request->deliverySchedule;
				$post->request_post->paymentMethod = $request->paymentMethod;
				$post->request_post->caption = $request->caption;

				$post->shoppingList->text = $request->shoppingList;

				DB::transaction(function() use ($post) {
					$post->save();
					$post->request_post->save();
					$post->shoppingList->save();
				})

				return 201;
				break;
			
			default:
				return response()->json([
					'data' => [
						'message': 'propery postIdentity must have values offer_post or request_post.'
					]
				], 200);
				break;
		}
    }

    /**
     *    [deletePost deletes post]
     *    @author Al Vincent Musa
     *    @param  Request $request [description]
     *    @param  [type]  $post_id [description]
     *    @return [type]           [description]
     */
    public function deletePost(Request $request, $post_id) {
    	$user = Auth::user();

		$post = Post::where('postNumber', '=', $post_id)->where('email', '=', $user->email)->firstOrFail();
		$post->postDeleteStatus = 1;

		DB::transaction(function() use ($post) {
			$post->save();
		});

		return 200;
    }