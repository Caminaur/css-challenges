<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home.home');
})->name('home');


Route::controller(HomeController::class)->group(function () {
    Route::get('/test', 'GET_HOME')->name('test');
});

Route::get('/navbar', function () {
    return view('navbar');
})->name('navbar');

Route::get('/navbar-bs', function () {
    return view('navbar-bs');
})->name('navbar-bs');



///////////////////////////// CHALLENGES /////////////////////////////
Route::get('/css-challenge-1b', function () {
    return view('challenges.challenge-1b');
});
Route::get('/css-challenge-4b', function () {
    return view('challenges.challenge-4b');
});
Route::get('/css-challenge-{id}', function ($id) {
    $view = 'challenges.challenge-' . $id;
    return view($view);
});
///////////////////////////// CHALLENGES /////////////////////////////

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
