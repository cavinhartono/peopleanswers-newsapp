<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;
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
    Route::get('/', 'index')->name('home');
    Route::get('/styles', 'styles')->name('dashboard.style');
    Route::get('/travels', 'travels')->name('dashboard.travel');
    Route::get('/opinion', 'opinion')->name('dashboard.opinion');
    Route::get('/must-reads', 'mustReads')->name('dashboard.mustRead');
    Route::get('/{name}', 'profile')->name('dashboard.index')->middleware('auth');
});

Route::middleware('auth')->group(function () {
    Route::controller(PostsController::class)->group(function () {
        Route::get('/posts', 'index')->name('posts.index');
        Route::get('/post/{name}/{title}', 'view')->name('posts.view');
        Route::get('/post/create', 'create')->name('posts.create');
        Route::post('/post/create', 'store')->name('posts.store');
        Route::get('/post/edit/{name}', 'edit')->name('posts.edit');
        Route::put('/post/edit/{name}', 'update')->name('posts.update');
    });
});

require __DIR__ . '/auth.php';
