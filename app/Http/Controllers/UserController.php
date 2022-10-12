<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userinformation;
use App\Models\socialmedialink;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Validator;
class UserController extends Controller
{
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
    public function login(Request $request, Userinformation $userinformation){

        $formfill = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);


        if(auth()->attempt($formfill)){
            session()->regenerate();
            return redirect()->route('showuserprofile', ['username', $userinformation->username])->with('success', 'You have been login');

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
        $user = Auth()->user();
        $formfill = $request->validate([
            'username' => 'required|unique:userinformations,username',
            'about' => 'required|max:250',
            'profilepicture' => 'file|mimes:jpg,png,img,jpeg',
            'phone' => 'required|string|min:3|max:10',
        ]);

        $formfill['user_id'] = Auth()->id();
        if(isset($formfill['profilepicture'])){
            $formfill['profilepicture'] = request()->file('profilepicture')->store('profilepictures');
        }

        $socialmedia = $request->socialmedialink;
            for($i=0; $i < count($socialmedia); $i++){
                $datasave = [
                    'user_id' => $user->id,
                    'views' => 0,
                    'socialmedialink' => $socialmedia[$i]
                ];

                DB::table('socialmedialinks')->insert($datasave);
            }

        Userinformation::create($formfill);
        return redirect()->route('showuserprofile', ['username' => $user->userinformation->username])->with('success', 'Your account has been created successfully');
    }

    public function edituserfillaccount(Request $request, Userinformation $userinformation ){
        $user = Auth()->user();
        $formfill = $request->validate([
            'username' => ['required', Rule::unique('userinformations', 'username')->ignore($userinformation->id)],
            'profilepicture' => 'image',
            'phone' => 'required|string|min:8|max:13',
            'about' => 'required|max:250',
        ]);

       if(isset($formfill['profilepicture'])){
         $formfill['profilepicture'] = request()->file('profilepicture')->store('profilepictures');
       }

        $userinformation->update($formfill);

        return redirect()->route('showuserprofile', ['username' => $user->userinformation->username] )->with('success', 'Your post has been updated successfully');
    }

    public function editsocialmedialinks(Request $request, socialmedialink $socialmedialinks ){
            $user = Auth()->user();
        DB::table('socialmedialinks')->where('user_id', $user->id)->delete();
            $socialmedia = $request->socialmedialink;
            for($i=0; $i < count($socialmedia); $i++){
                $datasave = [
                    'user_id' => $user->id,
                    'socialmedialink' => $socialmedia[$i]
                ];

                DB::table('socialmedialinks')->insert($datasave);
            }

        return redirect()->route('showuserprofile', ['username' => $user->userinformation->username] )->with('success', 'Your post has been updated successfully');
    }

    public function deletesocialmedialink(Socialmedialink $socialmedialink ){

        $socialmedialink->delete();
        return back()->with('success', 'Deleted');
    }

}

