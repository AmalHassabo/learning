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
use App\Medic;

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

Route::get('Medic/{id}',function ($id){
	$Medic=Medic::find($id);
	$Medic->delete();
	return redirect("Medic");
});

Route::get('edit/{id}',"MedicController@EditMedic");
Route::post('edit/{id}',"MedicController@EditMedic");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('employeelogin', 'Auth\EmployeeLoginController@showLoginForm');

Route::post('employeelogin', ['as'=>'employee-login','uses'=>'Auth\EmployeeLoginController@login']);

Route::get('/big', 'BigController@index')->name('basic');

Route::get('/about', 'BigController@hello')->name('about');

Route::get('/cart', 'BigController@show')->name('cart');

Route::get('/checkout', 'BigController@welcome')->name('checkout');

Route::get('/contact', 'BigController@cont')->name('contact');

Route::get('/shop-single', 'BigController@home')->name('shop-single');

Route::get('/shop', 'BigController@boss')->name('shop');


Route::get('/thankyou', 'BigController@thank')->name('thankyou');

