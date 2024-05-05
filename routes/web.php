<?php

use App\Http\Controllers\AddCatalogueController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\IsAdmin;
use App\Models\AddCatalogue;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', function (){
    return view('register');
});




Route::get('/Addcatalog', [AddCatalogueController::class, 'index'])->middleware('App\Http\Middleware\IsAdmin');

// Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'aunthenticate']); 

// Catalogue
Route::get('/catalog', [AddCatalogueController::class, 'showCatalogue']);

//Edit Catalog
Route::get('/edit-catalogue/{id}', [AddCatalogueController::class, 'editCatalogue']);
//Update Catalog
Route::patch('/update-catalogue/{id}', [AddCatalogueController::class, 'CatalogueDataUpdate']);
//Delete Catalog
Route::delete('/delete-catalogue/{id}', [AddCatalogueController::class, 'deleteCatalogue']);

//Register
Route::post('/register', [RegisterController::class, 'storeRegister']);  
Route::post('/Addcatalogue1', [AddCatalogueController::class, 'StoreCatalogue']);

//LogOut
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/orders', [OrderController::class, 'index'])->name('orders');

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/catalog', [OrderController::class, 'index'])->name('catalog');
Route::post('/addToCart/{id}', [OrderController::class, 'addToCart'])->name('addToCart');
Route::post('/updateQuantity/{id}', [OrderController::class, 'updateQuantity']);
Route::delete('/removeItem/{id}', [OrderController::class, 'removeItem'])->name('removeItem');




