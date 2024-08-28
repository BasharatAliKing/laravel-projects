<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\propertyType;
use App\Http\Controllers\AmenitiesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth','role:admin')->group(function(){
   // Route::get('/admin/dashboard',[adminController::class,'adminController'])->name('admin.admin_dashboard');
    Route::get('/admin/dashboard', [adminController::class, 'viewAdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [adminController::class, 'viewProfile'])->name('admin.profile');
    Route::get('/admin/editprofile', [adminController::class, 'editProfile'])->name('admin.editprofile');
    Route::post('/admin/updateprofile', [adminController::class, 'updateProfile'])->name('admin.updateprofile');
    Route::get('/admin/editpassword', [adminController::class, 'editPassword'])->name('admin.editPassword');
    Route::post('/admin/updatepassword', [adminController::class, 'updatePassword'])->name('admin.updatePassword');
    Route::get('/admin/logout', [adminController::class, 'logoutAdmin'])->name('admin.logout');
    Route::get('/admin/propertytype', [adminController::class, 'viewPropertytype'])->name('admin.propertytype');
    Route::get('/admin/amenities', [adminController::class, 'viewAmenities'])->name('admin.amenities');
});

 // Property Type 
 Route::middleware('auth', 'role:admin')->group(function (){
    Route::get('/admin/propertytype',[propertyType::class,'viewPropertyType'])->name('admin.propertytype');
   // Route::get('/admin/allamenities',[AmenitiesController::class,'viewAmenity'])->name('admin.amenities');
    Route::controller(AmenitiesController::class)->group(function(){
        Route::get('/admin/amenities','showAmenites')->name('admin.amenities');
        Route::get('/admin/add/amenity','addAmenity')->name('admin.addAmenity');
        Route::post('/admin/amenity/added','addAmen')->name('admin.addAmen');
        Route::get('/admin/deleteAmenity/id/{id}','deleteAmenity')->name('admin.deleteAmen');
    });
 });

require __DIR__.'/auth.php';
