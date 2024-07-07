<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/', 'App\Http\Controllers\AdminController@authenticate')->name('admin.login');
Route::get('/beranda', 'App\Http\Controllers\PegawaiController@total')->name('beranda')->middleware('auth');
Route::get('/tambah_admin', function () {
    return view('tambahadmin');
})->middleware('auth');
Route::post('/tambahadmin', 'App\Http\Controllers\AdminController@store')->name('admin.store')->middleware('auth');
Route::get('/tambah_admin', 'App\Http\Controllers\AdminController@index')->name('admin.index')->middleware('auth');
Route::get('/tambah_pegawai', function () {
    return view('tambahpegawai');
})->middleware('auth');
Route::post('/tambahpegawai', 'App\Http\Controllers\PegawaiController@store')->name('pegawai.store')->middleware('auth');
Route::post('/tambah_pegawai', 'App\Http\Controllers\PegawaiController@index')->name('pegawai.index')->middleware('auth');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout')->name('admin.logout')->middleware('auth');
Route::get('/admin', 'App\Http\Controllers\AdminController@showAll')->name('admin.showAll')->middleware('auth');
Route::get('/admin/{id}/edit', 'App\Http\Controllers\AdminController@edit')->name('admin.edit')->middleware('auth');
Route::delete('/admin/{id}', 'App\Http\Controllers\AdminController@destroy')->name('admin.destroy')->middleware('auth');
Route::put('/admin/{id}', 'App\Http\Controllers\AdminController@update')->name('admin.update')->middleware('auth');
Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@showAll')->name('pegawai.showAll')->middleware('auth');
Route::put('/pegawai/{NIP}', 'App\Http\Controllers\PegawaiController@update')->name('pegawai.update')->middleware('auth');
Route::delete('/pegawai/{NIP}', 'App\Http\Controllers\PegawaiController@destroy')->name('pegawai.destroy')->middleware('auth');
