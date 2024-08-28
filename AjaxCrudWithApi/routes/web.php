<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('login');
});

Route::get('/register',[AuthController::class,'register']);
Route::view('/allposts','allposts');
Route::view('/viewpost','viewpost');