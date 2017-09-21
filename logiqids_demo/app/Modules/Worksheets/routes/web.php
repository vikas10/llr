<?php

Route::group(['module' => 'Worksheets', 'middleware' => ['web'], 'namespace' => 'App\Modules\Worksheets\Controllers'], function() {

    Route::resource('worksheets', 'WorksheetsController');

});
