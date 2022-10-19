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
})->name('main');
Route::any('/hgf_dashboard', function () {
    return view('hgf_dashboard');
})->name('hgf');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::any('/page2', function () {
    return view('index');
})->name('page2');

Route::any('/WebSites', function () {
    return view('websites');
})->name('WebSites');

Route::any('hgf', 'App\Http\Controllers\Page1Controller@index')->name('page1');

Route::any('help', 'App\Http\Controllers\Page1Controller@help')->name('help');

Route::any('form', 'App\Http\Controllers\Page1Controller@formtest');

Route::any('page', 'App\Http\Controllers\Page1Controller@page')->name('page');

Route::any('test1', 'App\Http\Controllers\Page1Controller@deneme')->name('test1');

// Route::get('/portal', function () {
//     $data=[
//       "ad"=>"cem",
//       "soyad"=>"karaduman",
//       "tckimlik"=>47557427034
//     ];
//     return view('portal', $data);
// });

Route::get('/portal', function () {
    $data=[
      "ad"=>"cem",
      "soyad"=>"karaduman",
      "tckimlik"=>47557427034
    ];
    return view('portal', compact('data'));
});

Route::get('/orbit', function () {
    $data=[
    "tarih1"=>"2022-10-01",
    "tarih2"=>"2022-10-20"
  ];
    return view('orbit',$data);
});
