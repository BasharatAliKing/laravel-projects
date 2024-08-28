<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\techmaxController;
Route::get('/',[techmaxController::class,'home'])->name('home');
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contacts', function () {
    return view('contacts');
});
//  this is in first line
//Route::view("/contact","contact");
Route::get('/page/king-us', function () {
    return "<h1>Hello World!</h1>";
});
Route::get('/page/ali', function () {
    return "<h1>Hello World! I'm Ali...</h1>";
});
Route::get('/page/foji', function () {
    return "<h1>Hello World! I'm Foji!!</h1>";
});

Route::redirect('/test','/about',301);

Route::get('/contact/{id?}', function (string $id=null) {
   if($id){
    return "User:" . $id ;
   }else{
    return "<h1>No ID Found!</h1>";
   }
})->where('id','[0-9]+');
Route::get('/admin', function(){
    return view('layouts.admin');
});
// Route::fallback(function(){
//    return "Page not found!";
// });




