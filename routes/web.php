<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::group(['middleware' => ['UserAuth']], function () {
    Route::get('/users_list', [UserController::class, 'index'])->name('users_list');
    Route::get('delete/{id}', [UserController::class, 'delete']);
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::view('/add_category', 'add_category')->name('add_category');
    Route::post('add_category', [CategoryController::class, 'addCategory']);
    Route::get('deletecategory/{c_id}', [CategoryController::class, 'deleteCategory']);
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::view('/add_product', 'add_product')->name('add_product');
    Route::post('add_product', [ProductController::class, 'addProduct']);
    Route::get('deleteproduct/{p_id}', [ProductController::class, 'deleteProduct']);
    Route::post('search', [HomeController::class, 'searchProduct'])->name('search_product');
    Route::get('product_detail/{id}', [HomeController::class, 'productDetail'])->name('product_detail');
    Route::get('cart', [CartController::class, 'index'])->name('cart');
    Route::post('addtocart', [CartController::class, 'addToCart'])->name('addtocart');
    Route::get('remove_from_cart/{id}', [CartController::class, 'removeFromCart'])->name('remove_from_cart');
    Route::get('proceed/{id}', [CheckoutController::class, 'index'])->name('proceed');
    Route::post('checkout', [CheckoutController::class, 'checkOut'])->name('checkout');
    Route::get('/my_order', [OrderController::class, 'myOrder'])->name('my_order');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/{id?}', [HomeController::class, 'index'])->name('home');
