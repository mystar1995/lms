<?php

/*
 * blog1s Tags Management
 */
Route::group(['namespace' => 'blog1Tags'], function () {
    Route::resource('blog1Tags', 'blog1TagsController', ['except' => ['show']]);

    //For DataTables
    Route::post('blog1Tags/get', 'blog1TagsTableController')
       ->name('blog1Tags.get');
});
