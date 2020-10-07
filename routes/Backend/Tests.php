<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('ktest_index', 'TestsController@index')->name('test_index');
Route::get('ktest_create', 'TestsController@create')->name('test_create');
