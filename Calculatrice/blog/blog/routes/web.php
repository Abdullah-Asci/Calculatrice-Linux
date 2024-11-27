<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalculController;


Route::get('/', function () {
    return view('Accueil');
});

Route::get('/calculatrice', [CalculController::class, 'index']);
Route::post('/calculer', [CalculController::class, 'calculer'])->name('calculer');
