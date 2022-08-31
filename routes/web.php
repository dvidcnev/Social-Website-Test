<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [SiteController::class, 'index'])->name('home.index');

Route::get('/about', [SiteController::class, 'about'])->name('home.about');

Route::get('/{id}', [PostsController::class, 'show'])->name('home.show');

Route::resource('posts', PostsController::class);
