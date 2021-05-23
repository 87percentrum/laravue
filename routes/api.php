<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('items', 'ItemController@index');
Route::group(['prefix' => 'item'], function () {
    Route::post('add', 'ItemController@add');
    Route::get('edit/{id}', 'ItemController@edit');
    Route::post('update/{id}', 'ItemController@update');
    Route::delete('delete/{id}', 'ItemController@delete');
});
