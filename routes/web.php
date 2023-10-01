<?php

use App\Http\Controllers\PostController;
use \App\Http\Controllers\Auth\RegisteredUserController;
use \App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;


Route::view('/','welcome')->name('home');
Route::view('/contact','contact')->name('contact');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
])->middleware('auth');

Route::view('/about','about')->name('about');

Route::get('/login', function (){
    return 'Login page';
})->name('login');
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

