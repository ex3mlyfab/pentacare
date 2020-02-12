<?php
Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');
        Route::resource('payments', 'Admin\Finance\PaymentController');
        Route::resource('appointments', 'Admin\Front\AppointmentController');
        Route::resource('visitorbooks', 'Admin\Front\VisitorBookController');
        Route::resource('complains', 'Admin\Front\ComplainController');
        Route::resource('calls', 'Admin\Front\GeneralCallController');
        Route::resource('patients', 'Admin\Front\PatientController');
        Route::resource('charges', 'Admin\Setting\ChargeController');
        Route::resource('chargecategories', 'Admin\Setting\ChargeCategoryController');
        Route::resource('complainsources', 'Admin\Setting\ComplainSourceController');
        Route::resource('complaintypes', 'Admin\Setting\ComplainTypeController');
        Route::resource('paymentmodes', 'Admin\Setting\PaymentModeController');
        Route::resource('visitorpurposes', 'Admin\Setting\VisitorPurposeController');
    });
});
