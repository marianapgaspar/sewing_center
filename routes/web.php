<?php

use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\UserController;
use App\Http\Controllers\Site\LoginController;
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

Route::get('/', [HomeController::class, 'index'])->name('site.home');

Route::get('products', [CategoryController::class, 'index'])->name('site.products');
Route::get('products/{slug}', [CategoryController::class, 'show'])->name('site.products.category');
Route::get('product/list', [ProductController::class, 'index'])->name('site.products.list')->middleware('auth');
Route::get('product/form',  [ProductController::class, 'form'])->name('site.products.form')->middleware('auth');
Route::get('product/form/{product_id}', [ProductController::class, 'formUpdate'])->name('site.products.form.update')->middleware('auth');
Route::post('product/add', [ProductController::class, 'add'])->name('site.products.add')->middleware('auth');
Route::post('product/update', [ProductController::class, 'update'])->name('site.products.update')->middleware('auth');
Route::delete('product/delete/{id}', [ProductController::class, 'delete'])->name('site.products.delete')->middleware('auth');

Route::get('category/list', [CategoryController::class, 'list'])->name('site.category.list')->middleware('auth');
Route::get('category/form', [CategoryController::class, 'form'])->name('site.categories.form')->middleware('auth');
Route::get('category/form/{slug}', [CategoryController::class, 'formUpdate'])->name('site.categories.form.update')->middleware('auth');
Route::post('category/add', [CategoryController::class, 'add'])->name('site.categories.add')->middleware('auth');
Route::post('category/update', [CategoryController::class, 'update'])->name('site.categories.update')->middleware('auth');
Route::delete('category/delete/{id}', [CategoryController::class, 'delete'])->name('site.categories.delete')->middleware('auth');

Route::get('users/list', [UserController::class, 'list'])->name('site.users.list')->middleware('auth');
Route::get('users/form', [UserController::class, 'form'])->name('site.users.form')->middleware('auth');
Route::get('users/form/{user_id}', [UserController::class, 'formUpdate'])->name('site.users.form.update')->middleware('auth');
Route::post('users/add', [UserController::class, 'add'])->name('site.users.add')->middleware('auth');
Route::post('users/update', [UserController::class, 'update'])->name('site.users.update')->middleware('auth');
Route::delete('users/delete/{id}', [UserController::class, 'delete'])->name('site.users.delete')->middleware('auth');

Route::view('about', 'site.about.index')->name('site.about');
Route::get('contact', [ContactController::class, 'index'])->name('site.contact');
Route::post('contact', [ContactController::class, 'contact'])->name('site.contact.form');

Route::get('cms', [LoginController::class, 'cms'])->name('site.cms');
Route::get('login', [LoginController::class, 'login'])->name('site.login');
Route::get('logout', [LoginController::class, 'logout'])->name('site.logout');
Route::post('authenticate', [LoginController::class, 'authenticate'])->name('site.authenticate');

