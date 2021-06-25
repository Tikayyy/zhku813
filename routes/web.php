<?php

use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\page;

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

Route::get('/', '\App\Http\Controllers\IndexController@index')->name('index');
Route::get('/page/contacts', '\App\Http\Controllers\IndexController@contacts')->name('contacts');
Route::get('/page/dop-contacts', '\App\Http\Controllers\IndexController@dop_contacts')->name('dop-contacts');
Route::get('/login', '\App\Http\Controllers\IndexController@login')->name('login');
Route::get('/meter-form', '\App\Http\Controllers\IndexController@meter_form')->name('meter-form');
Route::get('/page/kak-pereyti', '\App\Http\Controllers\IndexController@kak_pereyti')->name('kak-pereyti');
Route::get('/page/tarif', '\App\Http\Controllers\IndexController@tarif')->name('tarif');
Route::get('/page/plani-otchet', '\App\Http\Controllers\IndexController@plani_otchet')->name('plani-otchet');
Route::get('/page/news', '\App\Http\Controllers\IndexController@news')->name('news');
Route::get('/page/news/{id}', '\App\Http\Controllers\IndexController@current_news')->name('current-news');
Route::get('/page/reports', '\App\Http\Controllers\IndexController@reports')->name('reports');
Route::get('/page/recriviz', '\App\Http\Controllers\IndexController@recriviz')->name('recriviz');
