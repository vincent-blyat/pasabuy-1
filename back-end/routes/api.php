<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\userInformationController;
use App\Http\Controllers\addressController;
use App\Http\Controllers\forgotPasswordController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\resetPasswordController;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\shoppingOffersController;
use App\Http\Controllers\shoppingOrdersController;
use App\Http\Controllers\reviewsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Broadcast::routes(['middleware' => ['auth:sanctum']]);

Route::group(['middleware' => ['auth:sanctum']], function () {
	Route::get('/user/posts', [PostController::class, 'get_user_posts']);
	Route::post('post/offer', [PostController::class, 'create_offer_post']);
	Route::post('post/request', [PostController::class, 'create_request_post']);
    Route::get('/getPersonal', [userInformationController::class, 'getPersonal']);
    Route::get('/getAddress', [userInformationController::class, 'getAddress']);
    Route::get('/getLanguages', [userInformationController::class, 'getLanguages']);
    Route::post('/editPersonal', [userInformationController::class, 'editPersonal']);
    Route::post('/editAddress', [addressController::class, 'editAddress']);
    Route::post('/editAccount', [userInformationController::class, 'editAccount']);
    Route::get('/getValidID', [userInformationController::class, 'getValidID']);
    Route::get('/getChatroom', [messageController::class, 'getChatroom']);
    Route::get('/getMessages', [messageController::class, 'getMessages']);
    Route::post('/sendMessage', [messageController::class, 'sendMessage']);
    Route::get('/getPosts', [PostController::class, 'getAllPosts']);
    Route::post('/share', [PostController::class, 'sharePost']);
    Route::get('/getShares', [PostController::class, 'getAllShares']);
    Route::get('/getNotifications', [NotificationController::class, 'getAll']);
    Route::get('/getUnreadNotifications', [NotificationController::class, 'getUnread']);
    Route::post('/readNotif', [NotificationController::class, 'readNotif']);
    Route::post('/changeEmail', [userInformationController::class, 'changeEmail']);
    Route::post('/changePassword', [userInformationController::class, 'changePassword']);
    Route::post('/confirmUser', [userInformationController::class, 'confirmUser']);
    Route::post('/updateProfilePic', [userInformationController::class, 'updateProfilePic']);
    Route::post('/createChatRoom', [messageController::class, 'createRoom']);
    Route::post('/createTransaction', [transactionController::class, 'createTransaction']);
    Route::get('/getTransaction', [transactionController::class, 'getTransaction']);
    Route::post('/cancelRequest', [transactionController::class, 'cancelRequest']);
    Route::post('/declineRequest', [transactionController::class, 'declineRequest']);
 
 
    
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/authenticated', function () {
    return true;
});



Route::post('login',[loginController::class, 'login'] )->name('login');
Route::post('postPersonal',[RegisterController::class, 'postPersonal'] );
Route::post('postID',[RegisterController::class, 'postID'] );
Route::post('postAddress',[RegisterController::class, 'postAddress'] );
Route::post('register',[RegisterController::class, 'register'] );
Route::post('logout',[loginController::class, 'logout'] );
Route::get('refProvince',[addressController::class, 'refProvince'] );
Route::get('refcityMunicipality',[addressController::class, 'refcityMunicipality'] );
Route::get('refBrgy',[addressController::class, 'refBrgy'] );

Route::post('/password/email',[forgotPasswordController::class, 'sendResetLinkEmail']);
Route::post('/password/reset',[resetPasswordController::class, 'reset'] );

Route::post('/confirmVerificationCode', [RegisterController::class, 'confirmCode']);
Route::get('user/feed', [PostController::class, 'getFeeds']);
Route::get("shoppingoffers",[shoppingOffersController::class, 'listShoppingOffers']);
//Route::post("shoppingoffers",[shoppingOffersController::class, 'addShoppingOffers']);
Route::post("/editshoppingoffers",[shoppingOffersController::class, 'editshoppingoffers']);
Route::get("shoppingorders",[shoppingOrdersController::class, 'listShoppingOrders']);
//Route::put("editShoppingOffers",[shoppingOffersController::class, 'update']);
Route::get("reviews",[reviewsController::class, 'listReviews']);
Route::post('/confirmVerificationCode', [RegisterController::class, 'confirmCode']);
