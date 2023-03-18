<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::permanentRedirect('/', '/home');

Route::view('/home', 'home.home')->name('home');

Route::get('set/{locale?}', [\App\Http\Controllers\LocaleController::class, 'setLocale']);

///////////////////////////// CHALLENGES /////////////////////////////
Route::get('/css-challenge-{id}', function (Request $request, $id) {
    return view('challenges.challenge-' . $id);
});
Route::get('/css-challenge-bonus/{id}', function ($id) {
    return view('bonus-challenges.bonus-challenge-' . $id);
});
///////////////////////////// CHALLENGES /////////////////////////////
Auth::routes();
