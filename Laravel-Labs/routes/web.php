<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
 
/* 
Route::get('/posts/{id}/{author}', function ($myId, $myAuther) {
        return "id = " . $myId . " | authors : " . $myAuther; 
});  */ 

 
Route::get('/posts/{id}/{author?}', "HomeController@blog")->name('blog');  

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

//