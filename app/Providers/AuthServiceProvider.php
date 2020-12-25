<?php

namespace App\Providers;

use App\Models\Stadium;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];


    public function boot()
    {
        $this->registerPolicies();

//        Gate::define('my-stadium', function (User $user, Stadium $stadium){
//            return $stadium -> user() -> is($user);

        Gate::before(function ($user, $ability){
            return $user->abilities()->contains($ability);
        });

    }
}
