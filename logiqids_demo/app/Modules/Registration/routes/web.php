<?php

Route::group(['module' => 'Registration', 'middleware' => ['web'], 'namespace' => 'App\Modules\Registration\Controllers'], function() {

    Route::resource('registration', 'RegistrationController');

});
