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
    Route::get('job-detail/{job_id}', 'JobDetailController@show')->name('jobDetail.show');
    // job-detail ajax
    Route::get('job-detail-ajax/profile-select', 'JobDetailController@profilesSelect')->name('jobDetail.profileSelect');
    Route::post('job-detail-ajax/send-profile-to-employer', 'JobDetailController@storeSendProfileToEmployer')->name('jobDetail.storeSendProfileToEmployer');
    Route::prefix('employee')->group(function () {
        Route::get('home-employee/create', 'EmployeeHomeController@create')->name('employeeHome.create');
        Route::post('home-employee', 'EmployeeHomeController@store')->name('employeeHome.store');
        Route::get('home-employee/edit', 'EmployeeHomeController@edit')->name('employeeHome.edit');
        Route::put('home-employee', 'EmployeeHomeController@update')->name('employeeHome.update');
        Route::get('sign-in', 'EmployeeHomeController@signInView')->name('employeeHome.signInView');
        Route::post('sign-in', 'EmployeeHomeController@signInCheck')->name('employeeHome.signInCheck');
        Route::get('sign-out', 'EmployeeHomeController@signOut')->name('employeeHome.signOut');
    });
});

Route::prefix('manage')->middleware(['AdminMiddleware'])->namespace('Manage')->group(function () {
    Route::resource('employer', 'EmployerController');
    Route::resource('employee', 'EmployeeController');
});