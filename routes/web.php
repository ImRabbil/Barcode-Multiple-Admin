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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('all-contracts','HomeController@AllContracts')->name('all.contracts');
Route::get('/newdata','HomeController@InsertData');
Route::post('/DataInsert','HomeController@DataAdded');
Route::get('all-barcode','HomeController@Barcode')->name('barcode');
Route::post('/create','HomeController@Store');
