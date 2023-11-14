<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function homeAdmin(){
        return view('admin.home');
    }

    public function homeManager(){
        return view('manager.home');
    }

    public function homeEmployee(){
        return view('employee.home');
    }


    public function userList(){
        $user = Auth::user();
        $users = User::where('id', '!=', $user->id)->get();
        return view('admin.users', ["data" =>$users]);
    }




}
