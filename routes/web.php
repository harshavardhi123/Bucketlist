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
/*Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::get('/index.blade.php', function () {
    return view('index');
|});

|Route::get('/about.blade.php', function () {
   | return view('About');
|});
|Route::get('/tours.blade.php', function () {
    |return view('tours');
|});
|Route::get('/contact.blade.php', function () {
    return view('contact');
|});
|Route::get('/', function () {
    |return view('index');
|});
*/
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/about', 'App\Http\Controllers\HomeController@about');
Route::get('/tours', 'App\Http\Controllers\HomeController@tours');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
Route::get('/tourists', 'App\Http\Controllers\HomeController@tourists');
Route::get('/checknow', 'App\Http\Controllers\HomeController@checknow');





