<?php
# @Date:   2019-09-24T13:19:19+01:00
# @Last modified time: 2019-09-24T14:24:31+01:00




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
});
Route::get('/matthew', function () {
    return view('newWelcome');
});

Route::get('/about', function () {
    return '<h1>"this is the about page"<h1>';
});
