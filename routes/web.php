<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});
Route::get('testing',function(){
    return Inertia::render('Index');
});
