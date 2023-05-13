<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
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

Route::controller(DashboardController::class)->group(function () {
  Route::get('/', 'index')->name('dashboard.index');
  Route::view('/{name}', 'view')->name('dashboard.view');
});

Route::controller(PostsController::class)->group(function () {
  Route::get('/posts', 'index')->name('posts.index');
  Route::view('/posts/{name}', 'view')->name('posts.view');
  Route::get('/post/create', 'create')->name('posts.create');
  Route::post('/post/create', 'store')->name('posts.store');
  Route::get('/post/edit/{name}', 'edit')->name('posts.edit');
  Route::put('/post/edit/{name}', 'update')->name('posts.update');
});

Route::controller(UsersController::class)->group(function () {
});

require __DIR__ . '/auth.php';
