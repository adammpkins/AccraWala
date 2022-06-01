<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
require __DIR__.'/auth.php';

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
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::post('/admin/pages', 'App\Http\Controllers\PagesController@store');

Route::get('/admin/pages/create','App\Http\Controllers\PagesController@create');

Route::get('/admin/pages/', 'App\Http\Controllers\PagesController@index');
Route::get('/admin', 'App\Http\Controllers\AdminController@index');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::delete('/admin/pages/{page}/delete', 'App\Http\Controllers\PagesController@destroy');

Route::get('/{page:slug}', 'App\Http\Controllers\PagesController@show');
Route::get('/admin/pages/{page}/edit', 'App\Http\Controllers\PagesController@edit');
Route::put('/admin/pages/{page}', 'App\Http\Controllers\PagesController@update');
Route::post('/ckeditor/upload', 'App\Http\Controllers\PagesController@@upload')->name('ckeditor.upload');

