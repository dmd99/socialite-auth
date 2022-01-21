<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Auth;
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


#App routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});

# Bsic Auth routes
Auth::routes();

# Socialite Login

// La redirection vers le provider
Route::get('auth/{provider}', [SocialController::class, 'redirect'])->name('socialite.redirect');
// Le callback du provider
Route::get('auth/{provider}/callback', [SocialController::class, 'callback'])->name('socialite.callback');
