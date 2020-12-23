<?php

use App\Employee;
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

Route::get('/{any?}', function () {
    return view('app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/employee/index','EmployeeController@index')->name('employee.index');
Route::get('/employee/get/data/{id}','EmployeeController@getData')->name('employee.get');
Route::post('/employee/store','RegisterController@store')->name('employee.store');

Route::get('/leave/employee',function (){
    $emloyee = Employee::with('Leave')->get();
    dd($emloyee);;
});


