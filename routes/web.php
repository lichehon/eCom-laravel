<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuth;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get("/about", function() {
//     return view ('about');
// });

 // Route::get("/user/{name}", function($name) {
//     return view("users",['name'=>$name]);
// });

// Route::get("users","Users@index");

Route::get('/', function () {
    return view('welcome');
});

Route::view("about",'about');
Route::view("contact",'contact');

//  Route::get("users",[Users::class,'viewData']);

//  Route::post("users",[Users::class,'login']);
//  Route::view("login",'login');
//  Route::view("noaccess",'noaccess');

//  Route::get("users",[UserController::class,'getData']);
 Route::post("users",[UserAuth::class,'userLogin']);
 //Route::view("login",'login');
 Route::view("profile",'user_profile');

 
 Route::get('/login', function () {
    if(session()->has('users'))
    {
        return redirect('user_profile');
    }
        return view('login');
});

 Route::get('/logout', function () {
     if(session()->has('users'))
     {
         session()->pull('users');
     }
         return redirect('login');
 });


