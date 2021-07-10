<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CustomMiddleware;
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

Route::view('login','index');

//Registration View Page
Route::view('signup','signup');
Route::view('home','testing');
// Route::get('/{name}', function ($name) {
//     return view('home',['name'=>$name]);
// });
// Route::view('signin','signin')->middleware('limit');
Route::view('signin','signin');
Route::view('checkspending','checkspending');
Route::group([ 'middleware' => 'limit' ],function(){
    Route::view('signup','signup');
    Route::view('home','testing');
 });
Route::view('pageaccess','pageaccess');