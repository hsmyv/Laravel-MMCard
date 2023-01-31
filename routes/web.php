<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SocialiteController;
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


    Route::controller(SocialiteController::class)->group(function(){
        Route::get('/sign-in/github', 'github')->middleware('guest')->name('signGithub');
        Route::get('/sign-in/github/redirect', 'githubRedirect')->middleware('guest')->name('githubRedirect');
    });

    Route::controller(RouteController::class)->group(function(){
        //userAuthentication
        Route::get('/login', 'showlogin')->middleware('guest')->name('showlogin');
        Route::get('/registration', 'showregistration')->middleware('guest')->name('showregistration');
        //userProfile
        Route::get('/profile/{username}', 'showuserprofile')->middleware('auth')->name('showuserprofile');
        Route::get('/profile/{username:username}/{token}', 'publishprofile')->name('publishprofile');
        Route::get('/changepassword', 'changepassword')->middleware('auth')->name('showchangepassword');
        Route::get('/socialmedialink', 'clicklink')->name('clicklink');

        //userAccount
        Route::get('/account/', 'showuserfillaccount')->middleware('auth')->name('showuserfillaccount');
        Route::get('/account/edit/{username}', 'showedituserfillaccount')->middleware('auth')->name('showedituserfillaccount');
        Route::get('/socialmedias/edit/{username}', 'showeditsocialmedialinks')->middleware('auth')->name('showeditsocialmedialinks');
        Route::get('/socialmedia/add', 'showaddsocialmedia')->middleware('auth')->name('showAddSocialmedia');

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
        Route::post('/account', 'userfillaccount')->middleware('auth')->name('userfillaccount');
        Route::patch('/account/edit/{userinformation:username}', 'edituserfillaccount')->middleware('auth')->name('edituserfillaccount');
        Route::post('/socialmedias/edit/', 'editsocialmedialinks')->middleware('auth')->name('editsocialmedialinks');
        Route::delete('/socialmedias/delete/{socialmedialink}', 'deletesocialmedialink')->middleware('auth')->name('deletesocialmedialink');
        Route::post('/socialmedia/add', 'addsocialmedia')->middleware('auth')->name('AddSocialmedia');
        Route::post('/pp/{id}/remove', 'removephoto')->name('removephoto');
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



