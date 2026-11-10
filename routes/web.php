<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

// use Illuminate\Support\Facades\Route;

// Route::get('/notes', function () {
// return view('welcome');
// });

Route::get('/notes', [NoteController::class, 'index']);

