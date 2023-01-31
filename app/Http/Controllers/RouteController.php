<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\socialmedialink;
use App\Models\Userinformation;
use Illuminate\Support\Facades\Auth;


class RouteController extends Controller
{
    //admin
    public function dashboard(){
        return view ('pages.admin.index.index',['user' => Auth()->user()]);
    }

    public function users(User $user){

        return view ('pages.admin.user', [
            'userinformations' => Userinformation::all()
        ]);
    }




    //userlogin
    public function showlogin(){
        return view('components.authentication.login');
    }

    public function showregistration(){
        return view('components.authentication.registration');
    }





    //userAccount
    public function showuserfillaccount(){
        return view('pages.UserAccount.account');
    }

    public function showedituserfillaccount(Request $request, User $user, Userinformation $userinformation){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('pages.UserAccount.edit',  [
            'userinformation' => $userinformation,
            'userinformation' => Userinformation::where('user_id', $id)
            ->first(),
            'socialmedialinks' => $user->socialmedialinks

        ]);
    }
    public function showeditsocialmedialinks(Request $request, User $user, Userinformation $userinformation){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('pages.UserSocialmedias.links',  [
            'userinformation' => $userinformation,
            'userinformation' => Userinformation::where('user_id', $id)
            ->first(),
            'socialmedialinks' => $user->socialmedialinks

        ]);
    }


    //userProfile
    public function showuserprofile(){
        $user = Auth()->user();
        if (Auth::check()) {
            return view('pages.UserProfile.userprofile', [
            'user' => $user,
            'userinformation' => $user->userinformation,
            'socialmedialinks' => $user->socialmedialinks
        ]);
        }
    }

    public function publishprofile($username, $token){

        $userinformation = Userinformation::where('username', $username)->firstOrFail();

        return view('pages.UserSocialmedias.profile', [
            'token' => $token,
            'userinformation' => $userinformation,
            'datas' => Socialmedialink::where('user_id', $userinformation->user_id)->get()
        ]);
    }

    public function clicklink(Request $request){

        //increment each link views
        $linkid = $request->get('link');
       socialmedialink::where('id', $linkid)->increment('views');

    }



    //userForgotPassword
    public function showforgetpassword(){
        return view('components.authentication.resetpassword');
    }

    public function showresetpassword(Request $request, $token = null){

        {
            $token = $request->token;

           return view('components.authentication.fillresetpassword')->with(
            ['token' => $token, 'email' => $request->email ]);
        }
    }

    public function changepassword(){
        $user = Auth()->user();
        return view('pages.UserProfile.changepassword', [
            'userinformation' => $user->userinformation
        ]);

    }

    public function showaddsocialmedia()
    {
        $user = Auth()->user();
        return view ('pages.UserSocialmedias.add', [
            'userinformation' => $user->userinformation
        ]);
    }



}
