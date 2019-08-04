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
use App\Http\Controllers\Auth\LoginController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('accommodations','accommodationsController');
Route::resource('programmes','programmesController');

Route::resource('staffhome','staffhomeController');
Route::resource('registration','Auth\RegisterController');
//route for login customization
Route::post('/login/custom',
    ['uses' =>'Auth\LoginController@login',
        'as' =>'login.custom']);
Route::group(['middleware'=>'auth'],function(){
    Route::get('/faculty/faculty_adminhomepage',function(){
        return view('/faculty/faculty_adminhomepage');
    })->name('faculty.adminpage');
    Route::get('/faculty/faculty_staffhomepage',function(){
        return view('faculty_staffhomepage');
    })->name('faculty.staffpage');
    Route::get('/department/department_adminhomepage',function(){
        return view('department_adminhomepage');
    })->name('department.adminpage');
    Route::get('/department/department_staffhomepage',function(){
        return view('department_staffhomepage');
    })->name('department.staffpage');
    Route::get('programme',function(){
        return view('accommodation_create');
    })->name('programme');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
