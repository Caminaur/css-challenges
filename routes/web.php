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
    });
    Route::get('/css-challenge-bonus/{id}', function ($id) {
        return view('bonus-challenges.bonus-challenge-' . $id);
    });
});
///////////////////////////// CHALLENGES /////////////////////////////
Auth::routes();
