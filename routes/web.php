<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
route::view('/' , 'master');
route::view('h' , 'home')->name('home');
route::view('a' , 'about')->name('about');
route::view('c' , 'logincustomer')->name('login');
route::view('s' , 'service')->name('service');
route::view('ss' , 'signupservice')->name('signupservice');
route::view('cs' , 'signupcustomer')->name('signupcustomer');