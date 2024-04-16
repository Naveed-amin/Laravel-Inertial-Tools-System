<?php

use App\Http\Controllers\ComponentsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/',function(){
    return Inertia::render('Index');
});

Route::get('locate_ip',[ComponentsController::class,'locateIp'])->name('locate.ip');
