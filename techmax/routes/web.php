<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\techmaxController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\clientsSatisfyAdminController;
use App\Http\Controllers\trustedClientsController;
use App\Http\Controllers\questionController;
use Illuminate\Support\Facades\Route;

Route::controller(techmaxController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('/home','home')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/services','services')->name('services');
    Route::get('/portfolio','portfolio')->name('portfolio');
    Route::get('/blog','blog')->name('blog');
    Route::get('/contact','contact')->name('contact');
});
 // for show clientSatisfy


 Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('admin');

Route::get('/dashboard/services', function () {
    return view('admin.services');
})->middleware(['auth', 'verified'])->name('services');
Route::get('/dashboard/services/add', function () {
    return view('admin.addservice');
})->middleware(['auth', 'verified'])->name('addService');

Route::middleware('auth','verified')->group(function(){
    Route::post('/dashboard/services/serviceadd',[AdminController::class,'serviceadd'])->name('serviceadd');
    Route::get('/dashboard/services/',[AdminController::class,'viewServices'])->name('services');
    Route::get('/dashboard/services/{id}',[AdminController::class,'viewservice'])->name('viewservice');
    Route::get('/dashboard/services/delete/{id}',[AdminController::class,'deleteService'])->name('deleteService');
    Route::get('/dashboard/services/update/{id}',[AdminController::class,'update_view'])->name('update_view');
    Route::post('/dashboard/services/updateService/{id}',[AdminController::class,'updateService'])->name('updateservice');
    // Clients Satisfy!!!
    Route::get('/dashboard/clientSatisfy',[clientsSatisfyAdminController::class,'view'])->name('clientSatisfy');
    Route::get('/dashboard/clientSatisfy/add',[clientsSatisfyAdminController::class,'addaddclientstable'])->name('addclientstable');
    Route::post('/dashboard/clientSatisfy/add',[clientsSatisfyAdminController::class,'addclientdata'])->name('addclientdata');
    Route::get('/dashboard/clientSatisfy/delete/{id}',[clientsSatisfyAdminController::class,'deleteclient'])->name('deleteclient');
    Route::get('/dashboard/clientSatisfy/update/{id}',[clientsSatisfyAdminController::class,'view_update'])->name('update_view');
    Route::post('/dashboard/clientSatisfy/update/{id}',[clientsSatisfyAdminController::class,'update'])->name('update');

    // trusted Clients Images
    Route::get('/dashboard/trustedClients',[trustedClientsController::class,'view'])->name('trustedclients');
    Route::get('/dashboard/trustedClients/add',[trustedClientsController::class,'addImg'])->name('trustedclient');
    Route::get('/dashboard/trustedClients/delete/{id}',[trustedClientsController::class,'delete'])->name('delete');
    Route::post('/dashboard/trustedClients/imageAdded',[trustedClientsController::class,'add'])->name('addtrustedclient');
    Route::get('/dashboard/trustedClients/updateImage/{id}',[trustedClientsController::class,'update_view'])->name('updateTrustedClient');
    Route::post('/dashboard/trustedClients/update/{id}',[trustedClientsController::class,'update'])->name('trustupdate');
    
    // Asked Questions here
    Route::get('/dashboard/questions',[questionController::class,'view'])->name('questions');
    Route::get('/dashboard/questions/add',[questionController::class,'add_view'])->name('addquestion');
    Route::post('/dashboard/questions/add',[questionController::class,'add'])->name('add');
    Route::get('/dashboard/questions/delete/{id}',[questionController::class,'delete'])->name('delete');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

