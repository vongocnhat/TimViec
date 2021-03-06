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
    Route::get('/', 'HomeController@index')->name('homePage');
    Route::get('manager', 'JobListController@manager')->name('jobList.manager');
    Route::get('specialize', 'JobListController@specialize')->name('jobList.specialize');
    Route::get('labor', 'JobListController@labor')->name('jobList.labor');
    Route::get('student', 'JobListController@student')->name('jobList.student');
    // job-list ajax
    Route::post('{jobType}/job-list/search-ajax', 'JobListController@searchAjax')->name('jobList.searchAjax');
    // job-detail
    Route::get('{jobType}/job-detail/{jobID}', 'JobDetailController@show')->name('jobDetail.show');
    // job-detail ajax
    Route::get('job-detail-ajax/profile-select', 'JobDetailController@profilesSelect')->name('jobDetail.profileSelect');
    Route::post('job-detail-ajax/send-profile-to-employer', 'JobDetailController@storeSendProfileToEmployer')->name('jobDetail.storeSendProfileToEmployer');
    
    Route::namespace('employer')->prefix('employer-home')->name('employer-home.')->group(function () {
        Route::get('create', 'EmployerHomeController@create')->name('create');
        Route::post('store', 'EmployerHomeController@store')->name('store');
        Route::middleware(['EmployerMiddleware'])->group(function() {
            Route::get('edit', 'EmployerHomeController@edit')->name('edit');
            Route::put('update', 'EmployerHomeController@update')->name('update');
            Route::resource('job', 'JobHomeController');
        });
        Route::get('sign-in', 'EmployerHomeController@signInView')->name('signInView');
        Route::post('sign-in', 'EmployerHomeController@signInCheck')->name('signInCheck');
        Route::get('sign-out', 'EmployerHomeController@signOut')->name('signOut');

        
    });

    Route::namespace('Employee')->prefix('employee-home')->name('employeeHome.')->group(function () {
        Route::get('create', 'EmployeeHomeController@create')->name('create');
        Route::post('store', 'EmployeeHomeController@store')->name('store');
        Route::get('sign-in', 'EmployeeHomeController@signInView')->name('signInView');
        Route::post('sign-in', 'EmployeeHomeController@signInCheck')->name('signInCheck');
        Route::get('sign-out', 'EmployeeHomeController@signOut')->name('signOut');
        Route::middleware(['EmployeeMiddleware'])->group(function() {
            Route::get('edit', 'EmployeeHomeController@edit')->name('edit');
            Route::put('update', 'EmployeeHomeController@update')->name('update');
            // profile
            Route::get('profile-dynamic/to-pdf/{name}', 'ProfileDynamicHomeController@toPDF')->name('profile-dynamic.toPDF');
            Route::resource('profile-dynamic', 'ProfileDynamicHomeController');
            Route::get('profile/profile/{id}', 'ProfileHomeController@profile');
            Route::get('profile/to-pdf/{id}/{template}', 'ProfileHomeController@profileToPDF')->name('profile.to-pdf');
            Route::get('profile/pdf-dynamic', 'ProfileHomeController@pdfDynamic');
            Route::get('profile/pdf-dynamic/save', 'ProfileHomeController@pdfDynamicSave')->name('profile.pdfDynamicSave');
            Route::get('profile/pdf-dynamic-to-pdf', 'ProfileHomeController@pdfDynamicToPDF');
            Route::resource('profile', 'ProfileHomeController');
            // /profile
            // profile submitted
            Route::resource('profile-submitted', 'ProfileSubmittedHomeController');
            // /profile submitted
            
            
            
            // Route::get('job-profile', 'JobProfileHomeController@index')->name('jobProfile');
            // Route::resource('certificate', 'CertificateHomeController');
            // Route::resource('experience-of-profile', 'ExperienceOfProfileHomeController');
        });
    });
});

Route::prefix('manage')->middleware(['AdminMiddleware'])->namespace('Manage')->group(function () {
    Route::resource('employer', 'EmployerController');
    Route::resource('employee', 'EmployeeController');
    Route::resource('degree', 'DegreeController');
    Route::resource('typeofwork', 'TypeofworkController');
    Route::resource('career', 'CareerController');
    Route::resource('office', 'OfficeController');
    Route::resource('language', 'LanguageController');
    Route::resource('experience', 'ExperienceController');
    Route::resource('salary', 'SalaryController');
    Route::resource('profile', 'ProfileController');
    Route::resource('certificate', 'CertificateController');
    Route::resource('graduate', 'GraduateController');
    Route::resource('job', 'JobController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
