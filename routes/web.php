<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('deploy', 'DeployController@deploy');

Auth::routes();

Route::get('/', 'HomeController@index');
Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['isAdminAndDoctor']], function () {
        Route::get('/home', 'HomeController@index');
        Route::resource('prescription', 'PrescriptionController');
    });

    Route::group(['middleware' => ['isAdmin']], function () {
        Route::get('/home', 'HomeController@index');
        Route::resource('doctor', 'DoctorController');
        Route::resource('employee', 'EmployeeController');
        Route::resource('user', 'UserController');
    });

    Route::group(['middleware' => ['isSecretaryAndAdminAndDoctor']], function () {
        //doctors
        Route::resource('patient', 'PatientController');
        Route::get('getPatient', 'PatientController@getPatient');
        Route::get('/home', 'HomeController@index');
        Route::resource('pays', 'PaysController');
        //End doctors

        //Secretary
        Route::resource('appointment', 'AppointmentController');
        Route::resource('payment', 'PaymentController');
        Route::resource('operation', 'OperationController');
        Route::get('createPayment/{id}', 'PaysController@createPayment')->name('createPayment');
        Route::post('storePayment/{id}', 'PaysController@storePayment')->name('storePayment');
        //End Secretary
    });
});
