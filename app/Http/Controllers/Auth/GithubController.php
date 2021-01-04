<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;


class GithubController extends Controller
{

    public function redirect()
    {

        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('github')->user();
        $user = User::firstOrCreate([
            'email' => $user->getEmail()
        ], [
            'name' => $user->getName(),
            'password' => Hash::make(Str::random(32)),
        ]);
        Auth::login($user);
        return redirect(route('stadium.index'));
    }
}
