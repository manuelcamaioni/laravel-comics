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
    $comics = config('db.comics');
    $headerLinks = config('db.links');
    $footerInfo = config('db.DClist');
    $footerShop = config('db.shopList');
    $footerIcons = config('db.footerIconsList');
    return view('home', compact('comics', 'headerLinks', 'footerInfo', 'footerShop', 'footerIcons'));
})->name('homepage');
