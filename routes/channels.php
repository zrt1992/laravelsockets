<?php

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

use Illuminate\Support\Facades\Log;

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});



Broadcast::channel('post.{id}', function ($user, $id) {
    Log::info($user);
    Log::info(\App\Post::find($id)->user_id);
    Log::info($id);
    Log:info("end htis line");
    return $user->id == \App\Post::find($id)->user_id;
});



//Broadcast::channel('post.{id}', function ($user, $id) {
//   return true;
//});
