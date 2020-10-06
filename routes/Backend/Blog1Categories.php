<?php

/*
 * blog1s Categories Management
 */
Route::group(['namespace' => 'blog1Categories'], function () {
    Route::resource('blog1Categories', 'blog1CategoriesController', ['except' => ['show']]);

    //For DataTables
    Route::post('blog1Categories/get', 'blog1CategoriesTableController')
        ->name('blog1Categories.get');
});
