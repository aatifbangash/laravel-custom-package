<?php

Route::group(['namespace' => 'Bitfumes\Contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::get('contact2', function(){
        dd('contact2');
    })->name('contact2');
    Route::post('contact', 'ContactController@send');
});
