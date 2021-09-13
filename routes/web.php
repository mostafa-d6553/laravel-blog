<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\panel\UserController;

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


Route::get('/dashboard', function () {
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


require __DIR__.'/auth.php';
