<?php

Route::group(['module' => 'Worksheets', 'middleware' => ['api'], 'namespace' => 'App\Modules\Worksheets\Controllers'], function() {

    Route::resource('worksheets', 'WorksheetsController');

});
