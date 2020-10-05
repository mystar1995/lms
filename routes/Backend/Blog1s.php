<?php

/*
 * blog1s Management
 */
Route::group(['namespace' => 'blog1s'], function () {
    Route::resource('blog1s', 'blog1sController', ['except' => ['show']]);

    //For DataTables
    Route::post('blog1s/get', 'blog1sTableController')
       ->name('blog1s.get');
});
