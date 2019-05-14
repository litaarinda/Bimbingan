<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('mahasiswa')->user();

    //dd($users);

    return view('mahasiswa.dashboard');
})->name('home');

Route::get('/profil', 'ProfilMahasiswaController@index')->name('profil');
Route::get('/perkembangan', 'PerkembanganController@index')->name('perkembangan');
Route::get('/riwayatmhs', 'RiwayatMhsController@index')->name('riwayatmhs');
Route::resource('/skripsi', 'FileSkripsiController');
Route::get('/upload','uploadController@index');