<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('user.index');
});

Route::get('daftar-angkatan', function () {
    return view('user.angkatan');
});

Route::get('berita-acara', function () {
    return view('user.berita');
});

Route::get('materi', function () {
    return view('user.materi');
});

Route::get('contact', function () {
    return view('user.contact');
});

Route::get('struktur-organisasi', function () {
    return view('user.struktur');
});

Route::get('galery', function () {
    return view('user.galery');
});

Route::get('register-mahasiswa-aktif', function () {
    return view('registrasi.angkatan');
});

Route::get('admin-login', function () {
    return view('login');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register-angkatan', 'HomeController@registerAngkatan');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::post('pendaftaran-angkatan','UserController@registerAngkatan');
Route::post('contact','UserController@contact');
