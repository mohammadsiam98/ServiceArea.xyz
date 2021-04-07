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

// This is main Home page Route Url Start
Route::get('/', 'App\Http\Controllers\PagesController@index')->name('home');
// This is main Home page Route Url End

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('admin.dashboard');

    Route::get('/abouts/create', 'App\Http\Controllers\AboutPagesController@create')->name('admin.abouts.create');
    Route::put('/abouts/create', 'App\Http\Controllers\AboutPagesController@store')->name('admin.abouts.store');
    Route::get('/abouts/list', 'App\Http\Controllers\AboutPagesController@list')->name('admin.abouts.list');
    Route::get('/abouts/edit/{id}', 'App\Http\Controllers\AboutPagesController@edit')->name('admin.abouts.edit');
    Route::post('/abouts/update/{id}', 'App\Http\Controllers\AboutPagesController@update')->name('admin.abouts.update');
    Route::delete('/abouts/destroy/{id}', 'App\Http\Controllers\AboutPagesController@destroy')->name('admin.abouts.destroy');
   
});
Route::get('/download/{file}', 'App\Http\Controllers\DownloadController@download')->name('admin.abouts.file');