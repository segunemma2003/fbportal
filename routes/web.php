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
})->name('dashboard')->middleware('auth');
Route::get('/trainers/profile',function(){
	$user=Auth::user();
	return view('dashboard.profile',compact('user'));
})->name('profile')->middleware('auth');
Route::post('/trainers/profile','ProfileController@store');
Route::get('trainer/password/reset','DashboardController@passwordreset')->middleware('auth');
Route::post('trainer/password/reset','DashboardController@resetpassword')->middleware('auth');

Route::get('/trainers/resources',function(){
	return view('dashboard.resources');
})->name('resources')->middleware('auth');

Route::get('/trainers/report','DashboardController@allreport')->middleware('auth')->name('user.reports');
Route::get('/trainers/report/{id}','DashboardController@makereport')->middleware('auth')->name('report');
ROute::post('/trainers/report/{id}', 'DashboardController@report')->middleware('auth');
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

Route::get('/admin/pswd',function(){
	return view('admin.pswd');
})->name('pswd');

Route::get('/admin/credit',function(){
	return view('admin.credit');
})->name('credit');

Route::get('/admin/pay',function(){
	return view('admin.pay');
})->name('pay');
Route::get('/registration','AdminController@train')->name('trainer');
Route::post('/registration','AdminController@addTrainer');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/reports','AdminController@reports')->name('admin.reports');
Route::get('/admin/reports/{id}','AdminController@eachreport')->name('admin.eachreport');
Route::post('/admin/reports/{id}','AdminController@updatereport');
Route::get('admin/reports/download/{id}','AdminController@downloadreport')->name('download.report');
Route::get('/admin/allsession','AdminController@allsession')->name('admin.allsession');
Route::get('/admin/allsession/{id}/{status}','AdminController@status')->name('session.decision');
Route::get('/admin/allsession/{id}','AdminController@eachsession');

Route::get('/admin/trainees',function(){
	return view('admin.trainees');
})->name('admin.trainees');
Route::get('/admin/trainers','AdminController@trainers')->name('admin.trainers');
Route::get('/downloadPDF/{id}','AdminController@downloadPDF')->name('admin.pdf');
Route::get('/downloadExcel/single/{id}','AdminController@singleExport')->name('admin.single.export');
Route::get('/downloadExcel','AdminController@export')->name('admin.export');
});