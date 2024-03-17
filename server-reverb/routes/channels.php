<?php

use Illuminate\Support\Facades\Broadcast;

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

// We can use model binding here
// https://laravel.com/docs/10.x/broadcasting#authorization-callback-model-binding

// Private channel
// https://laravel.com/docs/10.x/broadcasting#defining-authorization-callbacks

Broadcast::channel('users.{id}', function ($user, $id) {
    // return (int) $user->id === (int) $id;
    return true;
});


// Presence channel
// https://laravel.com/docs/10.x/broadcasting#authorizing-presence-channels
Broadcast::channel('chats.{thread}', function ($user, $thread) {
    // return user instead of boolean
    return $user;
});

// We can als use middleware here
// https://laravel.com/docs/10.x/broadcasting#authorization-callback-authentication
// Broadcast::channel('channel', function () {
//     // ...
// }, ['guards' => ['web', 'admin']]);
