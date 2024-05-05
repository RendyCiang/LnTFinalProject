<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Home Page tanpa CRUD BE
Route::get('/home', function () {
    return view('home1');
});
//Home Page
Route::get('/home1', [HomePageController::class, 'index']);

Route::get('/admin-panel', [AdminController::class,'admin'])->middleware('App\Http\Middleware\IsAdmin');

//page create product
Route::get('/add-product', [ProductController::class,'redirectToCreateProductPage'])->middleware('App\Http\Middleware\IsAdmin');

//post data produk
Route::post('/post-add-product',[ProductController::class, 'createProduct']);

//page update produck
Route::get('/edit-product-page/{id}',[ProductController::class,'editProductPage'])->middleware('App\Http\Middleware\IsAdmin');
//post update data dari table
Route::post('/edit-product/{id}',[ProductController::class,'editProduct']);

//delete
Route::post('/delete-product/{id}',[ProductController::class, 'deleteProduct']);

//Register
Route::get('/register', function () {
    return view('register');
});

//Login
Route::get('/login', function () {
    return view('login');
})->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::post('/login', [LoginController::class, 'aunth']);
Route::post('/logout', [LoginController::class, 'logout']);
