<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index(){

        // has one using eloquent

        $user = User::all();
        return view('phone', compact('user'));
    }
}
