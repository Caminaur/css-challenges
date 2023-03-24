<?php

use App\Http\Middleware\VerifyView;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::permanentRedirect('/', '/home');

Route::view('/home', 'home.home')->name('home')->middleware('redirect.challenge');

Route::get('set/{locale?}', [\App\Http\Controllers\LocaleController::class, 'setLocale']);

///////////////////////////// CHALLENGES /////////////////////////////
Route::middleware(['verify.view', 'lastpage'])->group(function () {
    Route::get('/css-challenge-bonus-{id}', function ($id) {
        return view('bonus-challenges.bonus-challenge-' . $id);
    });
    Route::get('/css-challenge-{id}', function ($id) {
        return view('challenges.challenge-' . $id);
    });
});
///////////////////////////// CHALLENGES /////////////////////////////
Auth::routes();

Route::view('error-page', 'error.404');
Route::fallback(function () {
    return view('error.404');
});
