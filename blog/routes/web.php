<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view("hello","hello");
// 
// Route::post("user",[Users::class,'getData']);
// Route::view("home","home")->middleware("protectedPage");
// Route::view("noaccess","noaccess");
// Route::group(["middleware" => ['protectedPage']],function()
// {
//     Route::view("users","users");
// });
// Route::get("users",[Users::class,'getData']);
Route::get("users",[Users::class,'index']);
