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
/**
Route::get('/FormMedic',"MedicController@ViewMedic");
**/
Route::post('/Medic',"MedicController@AddMedic");

Route::get('/Employee',"EmployeeController@ViewEmployee");

Route::post('/Employee',"EmployeeController@AddEmployee");

Route::get('/add',"ContentController@ShowContent");

Route::post('/add',"ContentController@AddContent");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('employeelogin', 'Auth\EmployeeLoginController@showLoginForm');

Route::post('employeelogin', ['as'=>'employee-login','uses'=>'Auth\EmployeeLoginController@login']);
