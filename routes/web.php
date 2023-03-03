<?php

use App\Http\Controllers\CoockieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Services\CoockieService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    $lastpage = (new CoockieService())->verifyAndRedirect();
    if ($lastpage != false) {
        return redirect($lastpage);
    }
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
Route::get('/css-challenge-{id}', function (Request $request, $id) {
    $view = 'challenges.challenge-' . $id;
    return view($view);
});

Route::get('/css-challenge-bonus/{id}', function ($id) {
    $view = 'bonus-challenges.bonus-challenge-' . $id;
    return view($view);
});
///////////////////////////// CHALLENGES /////////////////////////////

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
