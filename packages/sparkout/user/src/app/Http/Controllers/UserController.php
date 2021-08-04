<?php

namespace Sparkout\User\app\Http\Controllers;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $user = "Hi, Welcome!";
        return view('user::registration',compact('user'));
    }
}
