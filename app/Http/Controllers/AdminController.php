<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userinformation;
class AdminController extends Controller
{
    public function dashboard(){
        return view ('pages.admin.index');
    }
    public function inbox(){

        return view ('pages.admin.inbox');
    }
    public function filemanager(){

        return view ('pages.admin.filemanager');
    }
    public function pointofsale(){

        return view ('pages.admin.pointofsale');
    }
    public function chat(){

        return view ('pages.admin.chat');
    }
    public function post(){

        return view ('pages.admin.post');
    }
    public function users(User $user){

        return view ('pages.admin.user', [
            'userinformations' => Userinformation::all()
        ]);
    }
    public function changelog(){

        return view ('pages.admin.changelog');
    }
}
