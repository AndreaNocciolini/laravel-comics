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

// Route::get('/', function () {
//     return view('guest.layout.base');
// });

Route::get('/', function () {
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - Home'];
    return view('guest.home', $data);
})->name('home');

Route::get('/movies', function () {
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - Movies'];
    return view('guest.movies', $data);
})->name('movies');
