<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\Models\Route as RouteModel;
use App\Models\Station;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('route-shapes', function () {
    $routes = RouteModel::whereHas('shapes')->get();
    $routeShapes = $routes->load('shapes');
    return $routeShapes;
});

Route::get('stations', function () {
    return Station::all();
});
