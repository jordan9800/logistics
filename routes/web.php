<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

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
    return view('welcome');

    //$visits = Redis::incr('visits');

    // Cache::put('foo', 'bar', 10);
    
    // return Cache::get('foo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
