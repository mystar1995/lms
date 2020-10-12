<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('ktest_index', 'TestsController@index')->name('test_index');
Route::get('ktest_create', 'TestsController@create')->name('test_create');
Route::get('ajax_create_test', 'TestsController@ajax_create')->name('ajax_create');
Route::get('view_testcate', 'TestsController@view_testcate')->name('view_testcate');

