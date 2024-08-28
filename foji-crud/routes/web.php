<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employee;

Route::get('/',[employee::class,'allSoldiers'])->name('home');
Route::post('/add',[employee::class,'addSoldier'])->name('add');
Route::get('/view/{id}',[employee::class,'viewsoldier'])->name('view');
Route::get('/delete/{id}',[employee::class,'deleteSoldier'])->name('delete');
Route::get('update/{id}',[employee::class,'update'])->name('update');
Route::post('updateSoldier/{id}',[employee::class,'updateSoldier'])->name('updatesoldier');
Route::view('addsoldier','addsoldier');

