<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('firstpage');
});

Route::prefix('admin')->as('admin.')->group(function(){
    Route::view('/','admin.page.login')->name('login');
    Route::view('/register','admin.page.register')->name('register');
    Route::view('/dashboard','admin.page.dashboard.dashboard')->name('dashboard');
    Route::view('/siswa','admin.page.siswa.kelola_siswa')->name('siswa');
    Route::view('/mapel','admin.page.mapel.kelola_mapel')->name('mapel');
    Route::view('/presensi','admin.page.presensi.kelola_presensi')->name('presensi');
});
    
Route::prefix('mapel')->as('mapel.')->group(function(){
    Route::view('/','mapel.page.login')->name('login');
});

Route::prefix('siswa')->as('siswa.')->group(function(){
    Route::view('/','siswa.page.login')->name('login');
});

