<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/register', 'register');
Route::view('/login', 'login');
Route::view('/users_list', 'users_list');
Route::view('/add_category', 'add_category');
Route::view('/category', 'category');
Route::view('/add_product', 'add_product');
Route::view('/product', 'product');
Route::view('/shop', 'shop');
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);
Route::get('delete/{id}', [UserController::class, 'delete']);
Route::post('add_product', [ProductController::class, 'addProduct']);
Route::get('deleteproduct/{p_id}', [ProductController::class, 'deleteProduct']);
Route::post('add_category', [CategoryController::class, 'addCategory']);
Route::get('deletecategory/{c_id}', [CategoryController::class, 'deleteCategory']);