<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Sparkout\User\app\Http\Controllers\UserController;



Route::get('/user',[UserController::class,'index']);