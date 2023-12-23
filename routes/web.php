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

Route::get('/', function () {
    return view('/auth/login');
});
Route::get('/forgot', function () {
    return view('/auth/forgotPassword');
});
Route::get('/signup', function () {
    return view('/auth/signup');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/menu', function () {
    return view('menu');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/profile/profile', function () {
    return view('/profile/profile');
});
Route::get('/profile/address', function () {
    return view('/profile/address');
});
Route::get('/profile/transaction', function () {
    return view('/profile/transaction');
});
Route::get('/coba', function () {
    return view('coba');
});