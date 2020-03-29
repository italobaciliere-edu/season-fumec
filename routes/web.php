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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


/*
|-------------------------------
|   Autor name:   italobaciliere-edu
|   Autor email:  a226856106@fumec.edu.br
|-------------------------------
*/
/*Route::get('/', function (){
    return view('index');
});*/
Route::get('/', 'IndexController@index');