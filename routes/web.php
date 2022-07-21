<?php

use App\Models\Station;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
use App\Models\Route as RouteModel;
use Illuminate\Support\Facades\Redis;

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

Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');
Route::get('/itineraries', 'App\Http\Controllers\ItinerariesController@index');
Route::get('/itineraries/create', 'App\Http\Controllers\ItinerariesController@create');
Route::post('/itineraries', 'App\Http\Controllers\ItinerariesController@store');
Route::get('/itineraries/{itinerary}', 'App\Http\Controllers\ItinerariesController@show');
Route::get('/itineraries/{itinerary}/edit', 'App\Http\Controllers\ItinerariesController@edit');
Route::patch('/itineraries/{itinerary}', 'App\Http\Controllers\ItinerariesController@update');
Route::delete('/itineraries/{itinerary}/delete', 'App\Http\Controllers\ItinerariesController@destroy');

Route::get('/itineraries/{itinerary}/stops/create', 'App\Http\Controllers\StopsController@create');
Route::post('/itineraries/{itinerary}/stops', 'App\Http\Controllers\StopsController@store');
Route::get('/itineraries/{itinerary}/stops/{stop}/edit', 'App\Http\Controllers\StopsController@edit');
Route::patch('/itineraries/{itinerary}/stops/{stop}', 'App\Http\Controllers\StopsController@update');
Route::delete('/itineraries/{itinerary}/stops/{stop}/delete', 'App\Http\Controllers\StopsController@destroy');
Route::get('/itineraries/{itinerary}/stops/{stop}', 'App\Http\Controllers\StopsController@show');


Route::post('/admin/pages', 'App\Http\Controllers\PagesController@store')->middleware(['auth', 'verified']);
Route::get('/admin/pages/create', 'App\Http\Controllers\PagesController@create')->middleware(['auth', 'verified']);
Route::get('/admin/pages/', 'App\Http\Controllers\PagesController@index')->middleware(['auth', 'verified']);
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->middleware(['auth', 'verified']);
Route::delete('/admin/pages/{page}/delete', 'App\Http\Controllers\PagesController@destroy')->middleware(['auth', 'verified']);
Route::get('/admin/pages/{page}/edit', 'App\Http\Controllers\PagesController@edit')->middleware(['auth', 'verified']);
Route::put('/admin/pages/{page}', 'App\Http\Controllers\PagesController@update');
Route::post('/ckeditor/upload', 'App\Http\Controllers\PagesController@upload')->name('ckeditor.upload');


Route::get('/{page:slug}', 'App\Http\Controllers\PagesController@show');


