<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace' => 'Api'], function () {
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('register', 'RegisterController');
        Route::post('login', 'LoginController');
        Route::post('logout', 'LogoutController')->middleware('auth:api');
    });
});

Route::group([    
    'namespace' => 'Api',    
    'middleware' => 'api',    
    'prefix' => 'password'
], function () {    
    Route::group(['namespace' => 'Auth'], function () {
    Route::post('create', 'PasswordResetController@create');
    Route::get('find/{token}', 'PasswordResetController@find');
    Route::post('reset', 'PasswordResetController@reset');
});
});

Route::group([    
    // 'namespace' => 'Api',    
    // 'middleware' => 'api',    
    'prefix' => 'pharm'
], function () {    
    Route::get('all_pharmacies', 'PharmaciesController@get_ApiPharmacies');
});


Route::group([     
    'prefix' => 'audit'
], function () {    
    Route::get('all_audits', 'AuditsController@get_ApiAudits');
});

Route::group([
    'prefix' => 'employee'
], function () {    
    Route::get('all_employees', 'EmployeesController@get_ApiEmployees');
});

Route::group([
    'prefix' => 'supply'
], function () {    
    Route::post('all_suppliesInPharmaId', 'SuppliesController@get_ApiSupplies');
});


Route::group([
    'prefix' => 'auditEmployee'
], function () {    
    Route::post('auditsOfEmployee', 'AuditsController@get_ApiAuditUser');
});
