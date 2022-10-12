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
        return view ('pages.admin.index');
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
        return view('pages.userfillaccount');
    }

    public function showedituserfillaccount(Request $request, User $user, Userinformation $userinformation){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('pages.edituserfillaccount',  [
            'userinformation' => $userinformation,
            'userinformation' => Userinformation::where('user_id', $id)
            ->first(),
            'socialmedialinks' => $user->socialmedialinks

        ]);
    }
    public function showeditsocialmedialinks(Request $request, User $user, Userinformation $userinformation){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('pages.editsocialmedialinks',  [
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
            return view('pages.userprofile', [
            'user' => $user,
            'userinformation' => $user->userinformation,
            'socialmedialinks' => $user->socialmedialinks
        ]);
        }
    }

    public function publishprofile(User $user){
        $id = Auth::user()->id;

        return view('pages.usersocialmediaprofile', [
            'token' => $user->token,
            'userinformation' => userinformation::find($user->id),
            'datas' => Socialmedialink::where('user_id', $user->id)->get()
        ]);
    }

    public function clicklink(Request $request){


        //dd($linkid);
        $linkid = $request->get('link');
       socialmedialink::where('id', $linkid)->increment('views');


      //return Redirect::away($socialmedialink);
        //return redirect()->away($socialmedialink);
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

}
