<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/GanzaNethaneaS', 'App\Http\Controllers\GanzaNethaneaSController@index');