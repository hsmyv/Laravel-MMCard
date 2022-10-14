<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Models\Userinformation;
use App\Models\User;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\QRCode\QRCodeController;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/', '/home');

Route::get('/home', function(Userinformation $userinformation){
    return view('pages.home',
        ['userinformation' => $userinformation]
        );

});

    Route::prefix('admin')->group(function(){
        Route::controller(RouteController::class)->group(function(){
            Route::get('/dashboard', 'dashboard')->name('dashboard');
            Route::get('/users', 'users')->name('users');
            });
    });


    Route::controller(RouteController::class)->group(function(){
        //userAuthentication
        Route::get('/login', 'showlogin')->middleware('guest')->name('showlogin');
        Route::get('/registration', 'showregistration')->middleware('guest')->name('showregistration');
        //userProfile
        Route::get('/userprofile/{username}', 'showuserprofile')->middleware('auth')->name('showuserprofile');
        Route::get('/userprofile/{username:username}/{token}/', 'publishprofile')->name('publishprofile');
        Route::get('/changepassword', 'changepassword')->middleware('auth')->name('showchangepassword');
        Route::get('/socialmedialink', 'clicklink')->name('clicklink');

        //userAccount
        Route::get('/userfillaccount/', 'showuserfillaccount')->middleware('auth')->name('showuserfillaccount');
        Route::get('/edituserfillaccount/{username}/edit/', 'showedituserfillaccount')->middleware('auth')->name('showedituserfillaccount');
        Route::get('/editsocialmedialinks/{username}/edit/', 'showeditsocialmedialinks')->middleware('auth')->name('showeditsocialmedialinks');
        Route::get('/addsocialmedia', 'showaddsocialmedia')->middleware('auth')->name('showAddSocialmedia');

        //userForgotPassword
        Route::get('/forgetpassword', 'showforgetpassword')->name('showforgetpassword');
        Route::get('/resetpassword/{token}', 'showresetpassword')->name('showresetpassword');
    });




    Route::controller(UserController::class)->group(function(){
        //userAuthentication
        Route::post('/login', 'login')->middleware('guest')->name('login');
        Route::post('/logout', 'logout')->middleware('auth')->name('logout');
        Route::post('/registration', 'registration')->middleware('guest')->name('registration');
        //userProfile
        Route::post('/changepassword', 'changepassword')->middleware('auth')->name('changepassword');
        //userAccount
        Route::post('/userfillaccout', 'userfillaccount')->middleware('auth')->name('userfillaccount');
        Route::patch('/edituserfillaccounts/{userinformation:username}', 'edituserfillaccount')->middleware('auth')->name('edituserfillaccount');
        Route::post('/editsocialmedialinks/', 'editsocialmedialinks')->middleware('auth')->name('editsocialmedialinks');
        Route::delete('/deletesocialmedialink/{socialmedialink}', 'deletesocialmedialink')->middleware('auth')->name('deletesocialmedialink');
        Route::post('/addsocialmedia', 'addsocialmedia')->middleware('auth')->name('AddSocialmedia');

    });


    //userForgotPassword
    Route::controller(ForgetPasswordController::class)->group(function(){
        Route::post('/forgetpassword', 'forgetpasswordlink')->name('forgetpasswordlink');
        Route::post('/resetpassword', 'submitresetpassword')->name('submitresetpassword');

    });



    Route::get('/button', function(){

        return view('pages.addremovebutton');
    });

    Route::post('/dynamic-field/insert', [UserController::class , 'insert'])->name('dynamic');



