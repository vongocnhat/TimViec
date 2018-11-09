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

Route::namespace('Home')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('manager', 'JobListController@manager')->name('jobList.manager');
    Route::get('specialize', 'JobListController@specialize')->name('jobList.specialize');
    Route::get('labor', 'JobListController@labor')->name('jobList.labor');
    Route::get('student', 'JobListController@student')->name('jobList.student');
    // job-list ajax
    Route::post('job-list/search-ajax', 'JobListController@searchAjax')->name('jobList.searchAjax');
    // job-detail
    Route::get('job-detail/{jobID}/{backgroundColor}/{color}', 'JobDetailController@show')->name('jobDetail.show');
    // job-detail ajax
    Route::get('job-detail-ajax/profile-select', 'JobDetailController@profilesSelect')->name('jobDetail.profileSelect');
    Route::post('job-detail-ajax/send-profile-to-employer', 'JobDetailController@storeSendProfileToEmployer')->name('jobDetail.storeSendProfileToEmployer');
    Route::namespace('Employee')->prefix('employee-home')->name('employeeHome.')->group(function () {
        Route::get('create', 'EmployeeHomeController@create')->name('create');
        Route::post('store', 'EmployeeHomeController@store')->name('store');
        Route::get('edit', 'EmployeeHomeController@edit')->name('edit');
        Route::put('update', 'EmployeeHomeController@update')->name('update');
        Route::get('sign-in', 'EmployeeHomeController@signInView')->name('signInView');
        Route::post('sign-in', 'EmployeeHomeController@signInCheck')->name('signInCheck');
        Route::get('sign-out', 'EmployeeHomeController@signOut')->name('signOut');
        // profile
        Route::resource('profile', 'ProfileHomeController');
        // Route::get('job-profile', 'JobProfileHomeController@index')->name('jobProfile');
    });
});

Route::prefix('manage')->middleware(['AdminMiddleware'])->namespace('Manage')->group(function () {
    Route::resource('employer', 'EmployerController');
    Route::resource('employee', 'EmployeeController');
});