<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;


Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [MainController::class, 'home'])->name('home');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');

// Route::get('/experts', 'MainController@experts');

// Route::get('/services', 'MainController@services');

// Route::get('/edu', 'MainController@edu');