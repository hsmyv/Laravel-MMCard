<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Socialite;
use Str;
use App\Models\User;
use App\Models\Userinformation;
class SocialiteController extends Controller
{
    public function github(){
        return Socialite::driver('github')->redirect();

    }
    public function githubRedirect(){
        $user = Socialite::driver('github')->stateless()->user();

        $user = User::firstOrCreate([
            'email' => $user->email
        ],[
            'firstname' => $user->name,
            'lastname' => $user->name,
            'token' => Str::random(60),
            'password' => Hash::make(Str::random(24))
        ]);
        Auth::login($user, true);

        return redirect()->route('showuserfillaccount');
    }
}
