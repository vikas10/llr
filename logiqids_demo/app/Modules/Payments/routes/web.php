<?php

Route::group(['module' => 'Payments', 'middleware' => ['web'], 'namespace' => 'App\Modules\Payments\Controllers'], function() {

    Route::resource('payments', 'PaymentsController');

});
