<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [MainController::class, 'index' ])->name('index');
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::get('/artist',[MainController::class, 'artist'])->name('artist');
Route::get('/album', [MainController::class],'album')->name('album');
Route::get('/about', [MainController::class, 'about'])->name('about');
// Route::get('/login', [MainController::class, 'login'])->name('login');
// Route::get('/signup', [MainController::class, 'signup'])->name('signup');

Route::get('/toartist',[ArtistController::class, 'index'])->name('tartist');

// Sessions 
Route::get('session/get',[SessionController::class, 'accessSessionData']);
Route::get('session/set',[SessionController::class, 'storeSessionData']);
Route::get('session/remove',[SessionController::class, 'deleteSessionData']);


Route::get('/test', function() {
    return view('other.test');
});
Route::get('/guest',function(){
    return view('layouts.guest');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
