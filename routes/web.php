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
Route::get('/itineraries/create', 'App\Http\Controllers\ItinerariesController@create')->middleware(['auth', 'verified']);;
Route::post('/itineraries', 'App\Http\Controllers\ItinerariesController@store')->middleware(['auth', 'verified']);;
Route::get('/itineraries/{itinerary}', 'App\Http\Controllers\ItinerariesController@show');
Route::get('/itineraries/{itinerary}/edit', 'App\Http\Controllers\ItinerariesController@edit')->middleware(['auth', 'verified', 'admin']);;
Route::patch('/itineraries/{itinerary}', 'App\Http\Controllers\ItinerariesController@update')->middleware(['auth', 'verified', 'admin']);;
Route::delete('/itineraries/{itinerary}/delete', 'App\Http\Controllers\ItinerariesController@destroy')->middleware(['auth', 'verified', 'admin']);;
Route::post('/itineraries/{itinerary}/approve', 'App\Http\Controllers\ItinerariesController@approve')->middleware(['auth', 'verified', 'admin']);;

Route::get('/media', 'App\Http\Controllers\StationMediaController@index');
Route::get('/media/create', 'App\Http\Controllers\StationMediaController@create')->middleware(['auth', 'verified']);;
Route::post('/media', 'App\Http\Controllers\StationMediaController@store')->middleware(['auth', 'verified']);;
Route::get('/media/{media}', 'App\Http\Controllers\StationMediaController@show');
Route::get('/media/{media}/edit', 'App\Http\Controllers\StationMediaController@edit')->middleware(['auth', 'verified', 'admin']);;
Route::patch('/media/{media}', 'App\Http\Controllers\StationMediaController@update')->middleware(['auth', 'verified', 'admin']);;
Route::delete('/media/{media}/delete', 'App\Http\Controllers\StationMediaController@destroy')->middleware(['auth', 'verified', 'admin']);;

Route::get('/itineraries/{itinerary}/stops/create', 'App\Http\Controllers\StopsController@create');
Route::post('/itineraries/{itinerary}/stops', 'App\Http\Controllers\StopsController@store')->middleware(['auth', 'verified']);;
Route::get('/itineraries/{itinerary}/stops/{stop}/edit', 'App\Http\Controllers\StopsController@edit')->middleware(['auth', 'verified', 'admin']);;
Route::patch('/itineraries/{itinerary}/stops/{stop}', 'App\Http\Controllers\StopsController@update')->middleware(['auth', 'verified', 'admin']);;
Route::delete('/itineraries/{itinerary}/stops/{stop}/delete', 'App\Http\Controllers\StopsController@destroy')->middleware(['auth', 'verified', 'admin']);;
Route::get('/itineraries/{itinerary}/stops/{stop}', 'App\Http\Controllers\StopsController@show');


Route::post('/admin/pages', 'App\Http\Controllers\PagesController@store')->middleware(['auth', 'verified', 'admin']);
Route::get('/admin/pages/create', 'App\Http\Controllers\PagesController@create')->middleware(['auth', 'verified', 'admin']);
Route::get('/admin/pages/', 'App\Http\Controllers\PagesController@index')->middleware(['auth', 'verified', 'admin']);
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->middleware(['auth', 'verified', 'admin']);
Route::delete('/admin/pages/{page}/delete', 'App\Http\Controllers\PagesController@destroy')->middleware(['auth', 'verified', 'admin']);
Route::get('/admin/pages/{page}/edit', 'App\Http\Controllers\PagesController@edit')->middleware(['auth', 'verified', 'admin']);
Route::post('/ckeditor/upload', 'App\Http\Controllers\PagesController@upload')->name('ckeditor.upload')->middleware(['auth', 'verified', 'admin']);


Route::get('/{page:slug}', 'App\Http\Controllers\PagesController@show');


