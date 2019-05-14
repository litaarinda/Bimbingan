<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.dashboard');
})->name('home');

Route::get('/datamhs', 'dataMahasiswaController@index')->name('dataMhs');
Route::get('/tbhdatamhs', 'dataMahasiswaController@create')->name('tambahDataMhs');
Route::post('/tbhdatamhs', 'dataMahasiswaController@store');
Route::delete('/datamhs/{id}', 'dataMahasiswaController@destroy');

Route::get('/dataDosen', 'dataDosenController@index')->name('dataDosen');
Route::get('/tbhdataDosen', 'dataDosenController@create')->name('tambahDataDosen');
Route::post('/tbhdataDosen', 'dataDosenController@store');
