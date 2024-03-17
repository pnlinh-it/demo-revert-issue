<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::match(['get', 'post'], '/api/broadcasting/auth', function (Request $request) {
            Auth::loginUsingId($request->query('user_id'));

            /** @see Pusher::socket_auth */
            return Broadcast::auth($request);
        })->middleware(/*['api', 'auth:admin_api']*/);
    }
}
