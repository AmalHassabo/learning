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

Route::get('/Medic',"MedicController@ViewMedic");

Route::get('/Employee',"EmployeeController@ViewEmployee");

Route::get('/add',"ContentController@ShowContent");

Route::post('/add',"ContentController@AddContent");


