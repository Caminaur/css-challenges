<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::permanentRedirect('/', '/home');

Route::view('/home', 'home.home')->name('home')->middleware(\App\Http\Middleware\RedirectIfLastPageWasAChallenge::class);

Route::get('set/{locale?}', [\App\Http\Controllers\LocaleController::class, 'setLocale']);

///////////////////////////// CHALLENGES /////////////////////////////
Route::middleware(\App\Http\Middleware\LastPage::class)->group(function () {
    Route::get('/css-challenge-{id}', function ($id) {
        return view('challenges.challenge-' . $id);
    })->where('id', '^(3[00]|[12][0-9]|[1-9])$');
    Route::get('/css-challenge-bonus/{id}', function ($id) {
        return view('bonus-challenges.bonus-challenge-' . $id);
    });
});
///////////////////////////// CHALLENGES /////////////////////////////
Auth::routes();

Route::fallback(function () {
    return view('error.404');
});
