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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/trainers/dashboard',function(){
	return view('dashboard.index');
})->name('dashboard');

Route::get('/trainers/report',function(){
	$user=Auth::user();
// dd($user);
	return view('dashboard.report',compact('user'));
})->middleware('auth')->name('report');
Route::get('/trainers/error',function(){
	return view('dashboard.error');
});

Route::get('/trainers/error2',function(){
	return view('dashboard.error2');
});
Route::get('trainers/sessions','DashboardController@sessions')->middleware('auth')->name('allsessions');
Route::get('/trainers/books',function(){
	$user=Auth::user();
	return view('dashboard.books',compact('user'));
})->middleware('auth')->name('booksession');
Route::post('/trainers/books','DashboardController@booksessions')->middleware('auth')->name('trainers.books');
Route::group(["middleware"=>"admin"], function(){
Route::get('/admin/sessions',function(){
	return view('admin.allsession');
});
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/reports',function(){
	return view('admin.reports');
})->name('admin.reports');
Route::get('/admin/allsession','AdminController@allsession')->name('admin.allsession');
Route::get('/admin/allsession/{id}/{status}','AdminController@status')->name('session.decision');
Route::get('/admin/allsession/{id}','AdminController@eachsession');

Route::get('/admin/trainees',function(){
	return view('admin.trainees');
})->name('admin.trainees');
Route::get('/admin/trainers','AdminController@trainers')->name('admin.trainers');
});