<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    if(Auth::check()){
        return  ['id' => $user->indexUserAuthentication, 'email'=>$user->email];
    }
});

Broadcast::channel('chat.{roomId}', function ($user, $roomId) {
    if(Auth::check()){
        return  ['id' => $user->indexUserAuthentication, 'email'=>$user->email];
    }
});


