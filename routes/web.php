<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
Route::redirect('/', '/login');

Route::prefix('admin')->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/inbox', 'inbox')->name('inbox');
        Route::get('/filemanager', 'filemanager')->name('filemanager');
        Route::get('/pointofsale', 'pointofsale')->name('pointofsale');
        Route::get('/chat', 'chat')->name('chat');
        Route::get('/post', 'post')->name('post');
        Route::get('/users', 'users')->name('users');
        Route::get('/changelog', 'changelog')->name('changelog');
        });

});

Route::controller(UserController::class)->group(function(){
    Route::get('/login', 'showlogin')->middleware('guest')->name('showlogin');
    Route::post('/login', 'login')->middleware('guest')->name('login');
    Route::post('/logout', 'logout')->middleware('auth')->name('logout');

    Route::get('/registration', 'showregistration')->middleware('guest')->name('showregistration');
    Route::post('/registration', 'registration')->middleware('guest')->name('registration');


    Route::get('/userfillaccount/', 'showuserfillaccount')->middleware('auth')->name('showuserfillaccount');
    Route::post('/userfillaccout', 'userfillaccount')->middleware('auth')->name('userfillaccount');
    Route::get('/edituserfillaccount/{user}/edit/', 'showedituserfillaccount')->middleware('auth')->name('showedituserfillaccount');
    Route::patch('/edituserfillaccounts/{user}', 'edituserfillaccount')->middleware('auth')->name('edituserfillaccount');

    Route::get('/userprofile/{user}', 'showuserprofile')->middleware('auth')->name('showuserprofile');
    Route::get('/userprofile/user/{token}', 'publishprofile')->name('publishprofile');



});
    Route::controller(ForgetPasswordController::class)->group(function(){
        Route::get('/forgetpassword', 'showforgetpassword')->name('showforgetpassword');
        Route::post('/forgetpassword', 'forgetpasswordlink')->name('forgetpasswordlink');
        Route::get('/resetpassword/{token}', 'showresetpassword')->name('showresetpassword');
        Route::post('/resetpassword', 'submitresetpassword')->name('submitresetpassword');

    });

