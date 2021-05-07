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

Route::get('/', function () {
    return view('home');
})->name('pagina-home');

Route::get('/news', function () {
    return view('news');
})->name('pagina-news');

Route::get('/prodotti', function () {
    $pastas = config('pasta');
    $data = [
        'pastas' => $pastas
    ];
    $data['types'] = [];
    foreach ($data['pastas'] as $pasta) {
        if (!in_array($pasta['tipo'],$data['types'])) {
            $data['types'][] = $pasta['tipo'];
        }
    };
    return view('products',$data);
})->name('pagina-prodotti');

Route::get('/prodotti/dettagli/{id}', function ($id) {
    $pastas = config('pasta');
    $data = [
        'id' => $id,
        'pasta' => $pastas[$id]
    ];
    return view('details',$data);
})->name('pagina-dettagli');
