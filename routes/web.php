<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('firstpage');
});

Route::prefix('admin')->as('admin.')->group(function(){
    Route::view('/','admin.page.login')->name('login');
    Route::view('/register','admin.page.register')->name('register');
    Route::view('/dashboard','admin.page.dashboard')->name('dashboard');
});
    
Route::prefix('mapel')->as('mapel.')->group(function(){
    Route::view('/','mapel.page.login')->name('login');
});

Route::prefix('siswa')->as('siswa.')->group(function(){
    Route::view('/','siswa.page.login')->name('login');
});

