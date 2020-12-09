<?php

Route::group(['prefix' => 'api', 'namespace' => 'BrightMilk\LaravelOWM\Http\Controllers'], function() {

    Route::get('weather', 'LaravelOWMController@currentweather');

});