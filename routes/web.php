<?php

use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\UserController;
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
Route::get('/cms', [HomeController::class, 'cms'])->name('site.cms');

Route::get('products', [CategoryController::class, 'index'])->name('site.products');
Route::get('products/{slug}', [CategoryController::class, 'show'])->name('site.products.category');
Route::get('product/list', [ProductController::class, 'index'])->name('site.products.list');
Route::get('product/form',  [ProductController::class, 'form'])->name('site.products.form');
Route::get('product/form/{product_id}', [ProductController::class, 'formUpdate'])->name('site.products.form.update');
Route::post('product/add', [ProductController::class, 'add'])->name('site.products.add');
Route::post('product/update', [ProductController::class, 'update'])->name('site.products.update');
Route::delete('product/delete/{id}', [ProductController::class, 'delete'])->name('site.products.delete');

Route::get('category/list', [CategoryController::class, 'list'])->name('site.category.list');
Route::get('category/form', [CategoryController::class, 'form'])->name('site.categories.form');
Route::get('category/form/{slug}', [CategoryController::class, 'formUpdate'])->name('site.categories.form.update');
Route::post('category/add', [CategoryController::class, 'add'])->name('site.categories.add');
Route::post('category/update', [CategoryController::class, 'update'])->name('site.categories.update');
Route::delete('category/delete/{id}', [CategoryController::class, 'delete'])->name('site.categories.delete');

Route::view('about', 'site.about.index')->name('site.about');
Route::get('contact', [ContactController::class, 'index'])->name('site.contact');
Route::post('contact', [ContactController::class, 'contact'])->name('site.contact.form');

Route::get('login', [UserController::class, 'login'])->name('site.login');
Route::post('authenticate', [UserController::class, 'authenticate'])->name('site.authenticate');

