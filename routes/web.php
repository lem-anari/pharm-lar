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
})->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/employees', EmployeesController::class)->name('employees');
Route::get('/audits', AuditsController::class)->name('audits');
Route::get('/pharmacies', PharmaciesController::class)->name('pharmacies');
Route::get('/statistics', StatisticsController::class)->name('statistics');
