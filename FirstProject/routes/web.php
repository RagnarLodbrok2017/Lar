<?php

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
Route::get('pages', 'Pagecontroller@show');
Route::get('pages/{page}', 'Pagecontroller@showOnePage');
Route::post('pagesstore', 'Pagecontroller@store');
Route::get('page/{page}/delete', 'Pagecontroller@delete');
Route::post('notestore', 'Notecontroller@store');
