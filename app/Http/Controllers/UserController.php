<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userinformation;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Auth;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
class UserController extends Controller
{
    public function showlogin(){
        return view('components.authentication.login');
    }

    public function showregistration(){
        return view('components.authentication.registration');
    }

    public function showuserfillaccount(){
        return view('pages.userfillaccount');
    }
    public function showuserprofile(User $user){
        $id = Auth::user()->id;
        $user = User::find($id);
        if (Auth::check()) {
            // The user is logged in...
            return view('pages.userprofile', [
            'user' => $user,
            'userinformation' => Userinformation::where('user_id', $id)->first()
        ], compact('user') );
        }
    }

    public function publishprofile(User $user, Userinformation $userinformation){
        $id = Auth::user()->id;
        return view('pages.usersocialmediaprofile', [
            'token' => $user->token,
            'userinformation' => Userinformation::where('user_id', $id)->first()

        ]);

    }
    public function showedituserfillaccount(Request $request, User $user, Userinformation $userinformation){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('pages.edituserfillaccount',  [
            'userinformation' => $userinformation,
            'userinformation' => Userinformation::where('user_id', $id)
            ->first()]);
    }






    public function registration(Request $request){


        $formfill = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|min:3|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);


        $user = new User([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'token' => Str::random(60),
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->save();

        auth()->login($user);

        return redirect()->route('showuserfillaccount')->with('success', 'Your account has been created successfully');
    }
    public function login(Request $request){

        $formfill = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);


        if(auth()->attempt($formfill)){
            session()->regenerate();
            return redirect()->route('showuserprofile', ['user' => Auth::user()->id])->with('success', 'You have been login');

        }

       throw ValidationException::WithMessages([
        'email' => 'Email or password incorrect'
       ]);
    }



    public function logout(Request $request){

        auth()->logout();

        return redirect()->route('showlogin')->with('success', 'You have been logout');
    }


    public function userfillaccount(Request $request){

        $formfill = $request->validate([
            'username' => 'required|unique:userinformations,username',
            'about' => 'required|max:250',
            'profilepicture' => 'file|mimes:jpg,png,img,jpeg',
            'facebooklink' => 'required|min:5',
            'twitterlink' => 'required|min:5',
            'instagramlink' => 'required|min:5',

        ]);

        $formfill['user_id'] = auth()->id();

        if(isset($formfill['profilepicture'])){
            $formfill['profilepicture'] = request()->file('profilepicture')->store('profilepictures');
        }

        Userinformation::create($formfill);

        return redirect()->route('showuserprofile', ['user' => Auth::user()->id])->with('success', 'Your account has been created successfully');
    }

    public function edituserfillaccount(Userinformation $userinformation){

        $formfill = request()->validate([
            'username' => ['required', Rule::unique('userinformations', 'username')->ignore($userinformation->id)],
            'about' => 'required|max:250',
            'profilepicture' => 'file|mimes:jpg,png,img,jpeg',
            'facebooklink' => 'required|min:5',
            'twitterlink' => 'required|min:5',
            'instagramlink' => 'required|min:5',

        ]);

        if(isset($formfill['profilepicture'])){
            $formfill['profilepicture'] = request()->file('profilepicture')->store('profilepictures');
        }

        //doesn't work
        $userinformation->update($formfill);

        return redirect()->route('showuserprofile', ['user' => Auth::user()->id] )->with('success', 'Your post has been updated successfully');
    }



}
