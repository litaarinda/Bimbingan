<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'dosen'], function () {
  Route::get('/login', 'DosenAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'DosenAuth\LoginController@login');
  Route::post('/logout', 'DosenAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'DosenAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'DosenAuth\RegisterController@register');

  Route::post('/password/email', 'DosenAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'DosenAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'DosenAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'DosenAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'mahasiswa'], function () {
  Route::get('/login', 'MahasiswaAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'MahasiswaAuth\LoginController@login');
  Route::post('/logout', 'MahasiswaAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'MahasiswaAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'MahasiswaAuth\RegisterController@register');

  Route::post('/password/email', 'MahasiswaAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'MahasiswaAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'MahasiswaAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'MahasiswaAuth\ResetPasswordController@showResetForm');
});
