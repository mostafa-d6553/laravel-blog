<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/landing', function () {
    return view('Landing');
})->name('landing');

Route::get('/login', function () {
    return view('Login');
})->name('login');

Route::get('/register', function () {
    return view('Register');
})->name('register');

Route::get('/post', function () {
    return view('Post');
})->name('post');

Route::get('/reset-pass', function () {
    return view('Passwordreset');
})->name('reset-pass');

Route::get('/post/{id}', function ($id) {
    return view('Post');
})->name('showpost');

require __DIR__.'/auth.php';
