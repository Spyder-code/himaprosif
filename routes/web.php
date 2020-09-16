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

Route::get('register-mahasiswa-aktif', function () {
    return view('registrasi.angkatan');
});

Route::get('admin-login', function () {
    return view('login');
});
Route::get('/','UserController@index');
Route::get('/gallery','UserController@gallery');
Route::get('/berita-acara','UserController@berita');
Route::get('/media-partner','UserController@partner');
Route::get('/berita-acara/{judul}','UserController@detailBerita');

// Admin
Route::get('/admin/home', 'HomeController@index')->name('home');
Route::get('/admin/profile', 'HomeController@profile');
Route::get('/admin/gallery', 'HomeController@gallery');
Route::get('/admin/pesan', 'HomeController@pesan');
Route::get('/admin/user', 'HomeController@user');
Route::get('/admin/user/{name}', 'HomeController@detailUser');
Route::get('/admin/history', 'HomeController@history');
Route::get('/admin/berita-acara', 'HomeController@beritaAcara');
Route::get('/admin/addBerita', 'HomeController@beritaAcaraAdd');
Route::get('/admin/updateBerita/{berita}', 'HomeController@beritaAcaraUpdate');
Route::get('/admin/berita-acara/{id}', 'HomeController@detailBerita');
Route::get('/admin/register-angkatan', 'HomeController@registerAngkatan');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::post('pendaftaran-angkatan','UserController@registerAngkatan');
Route::post('contact','UserController@contact');
// Post Admin
Route::post('changeImageUser','HomeController@updateProfilImage');
Route::post('updatePassword','HomeController@updatePassword');
Route::post('updateUsername','HomeController@updateUsername');
Route::post('createBerita','HomeController@createBerita');
Route::post('deleteBerita','HomeController@deleteBerita');
Route::post('updateBerita','HomeController@updateBerita');
Route::post('createGallery','HomeController@createGallery');
Route::post('deleteGallery','HomeController@deleteGallery');
Route::post('updateGallery','HomeController@updateGallery');
Route::post('deletePesan','HomeController@deletePesan');
