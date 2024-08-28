<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\sellerController;
use App\Http\Controllers\allTypeController;
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
    Route::get('/admin/dashboard',[adminController::class,'adminController'])->name('admin.admin_dashboard');
    Route::get('/admin/logout',[adminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile',[adminController::class,'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/Update',[adminController::class,'AdminProfileUpdate'])->name('admin.profile.update');
    Route::get('/admin/profile/updatepassword',[adminController::class,'AdminUpdatePassword'])->name('admin.updatepassword');
    Route::post('/admin/profile/passwordUpdate',[adminController::class,'AdminUpdatep'])->name('admin.updatep');
});
Route::middleware('auth','role:seller')->group(function(){
    Route::get('/seller/dashboard',[sellerController::class,'sellerController'])->name('seller.seller_dashboard');
});

Route::middleware('auth','role:admin')->group(function(){
    Route::controller(allTypeController::class)->group(function(){
        Route::get('/alltype','allType')->name('admin.alltype');
        Route::get('/addproperty','addProperty')->name('admin.addProperty');
        Route::post('/addproperty','addProp')->name('admin.addprop');
        Route::get('/deleteProperty/{id}','typeDelete')->name('admin.typedelete');
        Route::get('/editProperty/{id}','editProperty')->name('admin.editProperty');
        Route::post('/updateProperty/{id}','UpdateProperty')->name('admin.updateprop');
    });   
      //  Amenities here
    Route::controller(AmenitiesController::class)->group(function(){
        Route::get('/amenities','showAmenites')->name('admin.amenities');
         Route::get('/addamenity','addAmenity')->name('admin.addAmenity');
         Route::post('/addamenity','addAmen')->name('admin.addAmen');
         Route::get('/deleteAmenity/{id}','deleteAmenity')->name('admin.deleteAmenity');
        // Route::get('/editProperty/{id}','editProperty')->name('admin.editProperty');
        // Route::post('/updateProperty/{id}','UpdateProperty')->name('admin.updateprop');
    });   
});


Route::get('/admin/login',[adminController::class,'adminLogin'])->name('admin.login');

require __DIR__.'/auth.php';
