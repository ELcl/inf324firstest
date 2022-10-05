<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('inf', function(){
    return view('inf.inf');
})->name('info');

Route::get('mat', function(){
    return view('mat.mat');
})->name('mate');

Route::get('qmc', function(){
    return view('qmc.qmc');
})->name('quim');