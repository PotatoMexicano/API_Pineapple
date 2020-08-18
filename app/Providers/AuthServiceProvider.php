<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function register()
    {
    }
    public function boot()
    {

        $this->app['auth']->viaRequest('api', function () {
           $headers = apache_request_headers();
           if($headers['remember_token']){
                return User::where('remember_token', $headers["remember_token"])->first();
           }
        });
    }
}
