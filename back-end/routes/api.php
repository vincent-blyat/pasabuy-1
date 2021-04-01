<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/authenticated', function () {
    return true;
});

Route::post('login',[loginController::class, 'login'] )->name('login');
Route::post('logout',[loginController::class, 'logout'] );

Route::post('post/offer', [PostController::class, 'create_offer_post'])->name('create_offer_post');

Route::get('test', function (Request $request) {
	dd($request);
});
