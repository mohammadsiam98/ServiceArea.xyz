<?php

use Illuminate\Support\Facades\Route;



// This is main Home page Route Url Start
Route::get('/', 'App\Http\Controllers\PagesController@index')->name('home');
// This is main Home page Route Url End

// Download CV route
Route::get('/download',function(){
    $file = public_path()."/Mohammad_Al_Amin_Siam_resume.pdf";
    return Response::download($file);
});
Route::post('/', 'App\Http\Controllers\ContactPagesController@store')->name('contact.store');
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('admin.dashboard');
    Route::get('/contact/list', 'App\Http\Controllers\ContactPagesController@list')->name('admin.contact.list');
   
});