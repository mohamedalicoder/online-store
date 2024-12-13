<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
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

// Route::controller(PostsController::class)->group(function (){
//     Route::get('/posts', 'index')->name('posts.index');

//     Route::get('/posts/create',  'create')->name('posts.create');
//     Route::get('/posts/{post}',  'show')->name('posts.show');
//     // edit post
//     Route::get('/posts/{post}/edit',  'edit')->name('posts.edit');
//     Route::put('/posts/{post}',  'update')->name('posts.update');
//     Route::post('/posts',  'store')->name('posts.store');

// });

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', AdminProductController::class);
Route::get('products/deleted/data', [AdminProductController::class, 'deletedData'])->name('products.deleted');
Route::get('products/restore/{id}', [AdminProductController::class, 'restore'])->name('products.restore');
Route::delete('products/delete/{id}', [AdminProductController::class, 'delete'])->name('products.delete');
Route::resource('store', ProductController::class);

Route::resource('users', UsersController::class);
Route::resource('posts', PostsController::class);
Route::delete('posts/delete/All', [PostsController::class, 'deleteAll'])->name('posts.delete.all');





