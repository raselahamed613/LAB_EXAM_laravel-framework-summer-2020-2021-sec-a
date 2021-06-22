<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

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
//Route::get('/home', ['uses'=>'indexController@index']);
Route :: get ('/home', [indexController::class, 'index']);
Route :: get ('/login',[loginController::class, 'log']);
Route :: get ('/dashboard', [dashboardController::class, 'dash']);
Route :: get('/register', [registerController::class, 'reg']);
route :: get ('/about', [aboutController::class, 'about'] );
// Route::get('/login', function () {
//     return view('login'); 
// });
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/home', function () {
//     return view('index');
// });
// Route::get('/profile', function () {
//     return view('dashboard');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/campaigns', function () {
//     return view('campaigns');
// });
// Route::get('/cart', function () {
//     return view('cart');
// });
// Route::get('/checkout', function () {
//     return view('checkout');
// });
// Route::get('/shop', function () {
//     return view('allshops');
// });
