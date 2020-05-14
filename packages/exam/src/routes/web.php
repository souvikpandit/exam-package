<?php
    Route::group(['namespace' => 'souvik\exam\Http\Controllers'], function () {
        Route::get('exam', 'HomeController@index')->name('exam');
    });


