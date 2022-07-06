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

// customer

route::view('cus' , 'signupcustomer')->name('signupcustomer');
route::view('ch' , 'customerhome')->name('customerhome');
route::view('cp' , 'customerprofile')->name('customerprofile');
route::view('ce' , 'customereditprofile')->name('customereditprofile');
route::view('cb' , 'customerbooking')->name('customerbooking');
route::view('cub', 'customerbooklist')->name('customerbooklist');

// service provider

route::view('ss' , 'signupservice')->name('signupservice');
route::view('sh' , 'serviceproviderhome')->name('serviceproviderhome');
route::view('sb' , 'servicebookings')->name('servicebookings');
route::view('sm' , 'serviceprovidermaster');
route::view('sp' , 'serviceproviderprofile')->name('serviceproviderprofile');
route::view('se' , 'serviceprovidereditprofile')->name('serviceprovidereditprofile');

// admin

route::view('admin' , 'admin')->name('admindashboard');
route::view('ap' , 'adminprofile')->name('adminprofile');
route::view('ae' , 'admineditprofile')->name('admineditprofile');
route::view('asp' , 'adminsppage')->name('adminsppage');
route::view('ac' , 'adminclientpage')->name('adminclientpage');
route::view('am' , 'adminmanage')->name('adminmanage');
route::view('ab' , 'adminbooking')->name('adminbooking');

route::view('t' , 'trial1');