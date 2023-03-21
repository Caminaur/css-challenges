<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::permanentRedirect('/', '/home');

Route::view('/home', 'home.home')->name('home')->middleware('redirect.challenge');

Route::get('set/{locale?}', [\App\Http\Controllers\LocaleController::class, 'setLocale']);

///////////////////////////// CHALLENGES /////////////////////////////
Route::middleware('lastpage')->group(function () {
    Route::get('/css-challenge-{id}', function ($id) {
        return view('challenges.challenge-' . $id);
    })->where('id', '(30|1b|4b|12b|13b|[12][0-9]|\d|)');

    Route::get('/css-challenge-bonus/{id}', function ($id) {
        return view('bonus-challenges.bonus-challenge-' . $id);
    })->where('id', '(1)');
});
///////////////////////////// CHALLENGES /////////////////////////////
Auth::routes();

Route::fallback(function () {
    return view('error.404');
});
