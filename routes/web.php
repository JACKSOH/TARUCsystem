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
use App\accommodation;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('accommodations','accommodationsController');
Route::resource('programmes','programmesController');
Route::get('programme',function(){
    return view('accommodation_create');
});
Route::resource('staffhome','staffhomeController');
Route::resource('registration','Auth\RegisterController');
Route::post('/faculty/faculty_staffhomepage',
    ['uses' =>'LoginController@login',
        'as' =>'faculty.staffhomepage']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
