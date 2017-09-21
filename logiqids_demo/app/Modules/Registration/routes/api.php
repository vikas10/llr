<?php

Route::group(['module' => 'Registration', 'middleware' => ['api'], 'namespace' => 'App\Modules\Registration\Controllers'], function() {

    Route::resource('registration', 'RegistrationController');

});
