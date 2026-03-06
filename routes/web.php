<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/forecast', function () {
    return view('forecast');
});

Route::get('/planner', function () {
    return view('planner');
});
