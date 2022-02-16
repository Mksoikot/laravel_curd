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

Route::get('/', 'BasicController@onSelect');
Route::get('/insert', function(){
    return view('insert');
});
Route::get('/delete', function(){
    return view('delete');
});
Route::get('/update', function(){
    return view('update');
});
Route::post('/insertData', 'BasicController@onInsert');
Route::post('/deleteData', 'BasicController@onDelete');
Route::post('/updateData', 'BasicController@onUpdate');
// Route::get('/update', 'BasicController@onUpdate');