<?php

use Illuminate\Support\Facades\Route;
use League\Flysystem\Config;

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
    $menuHeader = config('dbComics.menuHeader');
    $menuFooter = config('dbComics.menuFooter');
    // dd(compact('menuFooter'));
    return view('home', compact('menuHeader'), compact('menuFooter'));
})->name('home');