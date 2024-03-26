<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.page.firstpage');
});

Route::prefix('admin')->as('admin.')->group(function(){
    Route::view('/','admin.page.login')->name('login');
    Route::view('/register','admin.page.register')->name('register');
});

