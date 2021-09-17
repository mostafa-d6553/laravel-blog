<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\panel\UserController;
use App\Http\Controllers\panel\CategoryController;
use App\Http\Controllers\panel\PostController;
use App\Http\Controllers\panel\EditorUploadController;

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


Route::middleware('admin')
->get('/dashboard', function () {
    return view('panel.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('Landing');
})->name('landing');

Route::get('/landing', function () {
    return view('Landing');
})->name('landing');

Route::get('/reset-pass', function () {
    return view('Passwordreset');
})->name('reset-pass');

Route::get('/post/{id}', function ($id) {
    return view('Post');
})->name('showpost');

Route::middleware('auth')
->get('/profile', function () {
    return view('profile');
})->name('profile');

Route::middleware('auth')
->resource('/panel/users', UserController::class);

Route::middleware('auth')
->resource('/panel/category', CategoryController::class);

Route::middleware('auth')
->resource('/panel/posts', PostController::class);

Route::post('/editor-upload', [EditorUploadController::class, 'upload'])
->name('editor-upload');

require __DIR__.'/auth.php';
