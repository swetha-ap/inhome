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
// web home
route::view('/' , 'master');
route::view('h' , 'home')->name('home');
route::view('a' , 'about')->name('about');
route::view('l' , 'login')->name('login');
route::view('s' , 'service')->name('service');
// route::view('t' , 'trial');
// customer
// route::view('c' , 'logincustomer');
route::view('cus' , 'signupcustomer')->name('signupcustomer');
route::view('ch' , 'customerhome');
route::view('cb' , 'customerbooking');
// service provider
route::view('ss' , 'signupservice')->name('signupservice');
route::view('sh' , 'serviceproviderhome');
route::view('sb' , 'servicebookings');
route::view('sm' , 'serviceprovidermaster');

// admin
route::view('admin' , 'admin');
route::view('ap' , 'adminprofile');
route::view('ae' , 'admineditprofile');