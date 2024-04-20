<?php

use App\Http\Middleware\VerifyView;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::permanentRedirect('/', '/home');

Route::view('/home', 'home.home')->name('home')->middleware('redirect.challenge');

Route::get('set/{locale?}', [\App\Http\Controllers\LocaleController::class, 'setLocale']);

Route::middleware(['verify.view', 'lastpage'])->group(function () {

    ///////////////////////////// CHALLENGES /////////////////////////////
    Route::get('/css-challenge-bonus-{id}', function ($id) {
        return view('bonus-challenges.bonus-challenge-' . $id);
    });
    Route::get('/css-challenge-{id}', function ($id) {
        return view('challenges.challenge-' . $id);
    });
    ///////////////////////////// CHALLENGES /////////////////////////////

    ///////////////////////////// GRAPHS /////////////////////////////
    Route::view('/graphs/map-1', 'graphs.worldmap');
    Route::view('/graphs/barchart-1', 'graphs.barchart-1');
    Route::view('/graphs/barchart-2', 'graphs.barchart-2');
    Route::view('/graphs/barchart-3', 'graphs.barchart-3');
    Route::view('/graphs/barchart-4', 'graphs.barchart-4');
    Route::view('/graphs/piechart-1', 'graphs.piechart-1');
    Route::view('/graphs/piechart-2', 'graphs.piechart-2');
    ///////////////////////////// GRAPHS /////////////////////////////
});
Auth::routes();


Route::view('error-page', 'error.404');
Route::fallback(function () {
    return view('error.404');
});
