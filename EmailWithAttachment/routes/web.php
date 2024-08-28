<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/student',[StudentController::class,'student']);
Route::post('/submitform',[StudentController::class,'submitform'])->name('submitform');