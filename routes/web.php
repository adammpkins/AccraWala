<?php

use App\Models\Station;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
use App\Models\Route as RouteModel;

require __DIR__ . '/auth.php';

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
    $routes = RouteModel::whereHas('shapes')->get();
    $routeShapes = $routes->load('shapes');
    $stations = Station::all();
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'routeShapes' => fn() => $routeShapes,
        'stations' => fn() => $stations
    ]);
})->name('home');
//named route


Route::post('/admin/pages', 'App\Http\Controllers\PagesController@store')->middleware(['auth', 'verified']);

Route::get('/admin/pages/create', 'App\Http\Controllers\PagesController@create')->middleware(['auth', 'verified']);

Route::get('/admin/pages/', 'App\Http\Controllers\PagesController@index')->middleware(['auth', 'verified']);
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->middleware(['auth', 'verified']);


Route::delete('/admin/pages/{page}/delete', 'App\Http\Controllers\PagesController@destroy')->middleware(['auth', 'verified']);

Route::get('/{page:slug}', 'App\Http\Controllers\PagesController@show');
Route::get('/admin/pages/{page}/edit', 'App\Http\Controllers\PagesController@edit')->middleware(['auth', 'verified']);
Route::put('/admin/pages/{page}', 'App\Http\Controllers\PagesController@update');
Route::post('/ckeditor/upload', 'App\Http\Controllers\PagesController@upload')->name('ckeditor.upload');
