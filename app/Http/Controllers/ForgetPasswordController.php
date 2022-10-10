<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Str;
use App\Models\User;
use Mail;
use Hash;
class ForgetPasswordController extends Controller
{


    Public function forgetpasswordlink(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()

        ]);

        Mail::send('mail.forgetpassword', ['token' => $token] , function($message) use($request){
            $message->to($request->email)->subject('Reset Password');
        });

        return back()->with('success', 'We have e-mailed your password reset link!');
    }



    public function submitresetpassword(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
                            ->where([
                                'email' => $request->email,
                                'token' => $request->token
                            ])
                            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('success', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);


        DB::table('password_resets')->where('email', $request->email)->delete();
        return redirect()->route('showlogin')->with('success', 'Your password has been changed!');
    }
}
