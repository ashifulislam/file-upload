<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/file_upload','FileUploadController@upload_file')->name('upload.file');
Route::post('/file_store','FileUploadController@store')->name('store.file');
Route::get('/view_file','FileUploadController@view_file')->name('view.file');