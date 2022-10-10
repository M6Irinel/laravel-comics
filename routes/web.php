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

Route::get('/comics', function () {
    $data = [
        'dc' => config('DC')
    ];
    return view('comics', $data);
})->name('comics');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comic/{id}', function ($id) {
    if($id < count(config('comics'))){
        return view('comic', ['comic' => config('comics')[$id]]);
    }
})->where('id', '[0-9]+')->name('comic');
