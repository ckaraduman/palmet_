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
    return view('main');
});
Route::any('/hgf_dashboard', function () {
    return view('hgf_dashboard');
})->name('hgf');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::any('page2}', function () {
    return view('index');
})->name("page2");

Route::any('page1', 'App\Http\Controllers\Page1Controller@index');

Route::any('form', 'App\Http\Controllers\Page1Controller@formtest');

Route::any('page', 'App\Http\Controllers\Page1Controller@page')->name('page');

Route::any('test1', 'App\Http\Controllers\Page1Controller@deneme')->name('test1');
