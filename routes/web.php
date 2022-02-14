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
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - Characters'];
    return view('guest.home', $data);
})->name('home');

Route::get('home/{id}', function ($id) {
    $collection = collect(config('comics'));
    $product = $collection->where('id', $id);

    if ($product->count() === 0) {
        abort(404);
    }

    $singleProduct = '';
    foreach ($product as $value) {
        $singleProduct = $value;
    }

    return view('guest.singleComic', [
        'product' => $singleProduct,
        'pageName' => $singleProduct['title']
    ]);
})->name('product');

Route::get('/characters', function () {
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - Home'];
    return view('guest.characters', $data);
})->name('characters');

Route::get('/movies', function () {
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - Movies'];
    return view('guest.movies', $data);
})->name('movies');

Route::get('/tv', function () {
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - TV'];
    return view('guest.tv', $data);
})->name('tv');

Route::get('/games', function () {
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - Games'];
    return view('guest.games', $data);
})->name('games');

Route::get('/collectibles', function () {
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - Collectibles'];
    return view('guest.collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - Videos'];
    return view('guest.videos', $data);
})->name('videos');

Route::get('/fans', function () {
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - Fans'];
    return view('guest.fans', $data);
})->name('fans');

Route::get('/news', function () {
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - News'];
    return view('guest.news', $data);
})->name('news');

Route::get('/shop', function () {
    $data = ['comics' => config('comics'), 'pageName' => 'DC Comics - Shop'];
    return view('guest.shop', $data);
})->name('shop');
