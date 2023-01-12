<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view('/','frontend.screens.index')->name('index');
Route::view('/contact','frontend.screens.contact')->name('contact');
Route::view('/blog-details','frontend.screens.blog-details')->name('blog-details');
Route::view('/blog','frontend.screens.blog')->name('blog');
Route::view('/privacy-policy','frontend.screens.privacy-policy')->name('privacy-policy');
Route::view('/terms-conditions','frontend.screens.terms-conditions')->name('terms-conditions');
Route::view('/products','frontend.screens.products.products')->name('products');
Route::view('/product-details','frontend.screens.products.product-details')->name('product-details');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
