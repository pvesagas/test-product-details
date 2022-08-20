<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
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
    return view('index');
});
Route::get('/refresh', function () {
    \Illuminate\Support\Facades\Session::flush();
});

Route::get('/cart', function () {
    return Response::json(['data' => session()->get('cart')]);
});

Route::post('/add', [\App\Http\Controllers\Controller::class, 'addToCart']);
