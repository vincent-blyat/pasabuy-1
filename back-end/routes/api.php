<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\userInformationController;
use App\Http\Controllers\addressController;
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



Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/getPersonal', [userInformationController::class, 'getPersonal']);
    Route::get('/getAddress', [userInformationController::class, 'getAddress']);
    Route::get('/getLanguages', [userInformationController::class, 'getLanguages']);
    Route::post('/editPersonal', [userInformationController::class, 'editPersonal']);
    Route::post('/editAddress', [userInformationController::class, 'editAddress']);
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