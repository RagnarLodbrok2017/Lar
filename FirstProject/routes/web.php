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
Route::post('pagesstore', 'Pagecontroller@store');
Route::get('pages/{page}/delete', 'Pagecontroller@delete');
Route::get('pages/{page}', 'Pagecontroller@showOnePage');
Route::post('pages/{page}/notestore', 'Notecontroller@store');
Route::get('pages/{page}/delete', 'Pagecontroller@delete');
Route::get('notes/{note}/edit', 'Notecontroller@edit');
Route::post('notes/{note}/update', 'Notecontroller@update');
Route::get('notes/{note}/delete', 'Notecontroller@delete');
