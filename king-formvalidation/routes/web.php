<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('user');
});

Route::post('/add',[userController::class,'addUser'])->name('add');
