<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('ktest', 'KtestController@index')->name('ktest');
Route::get('ktest/create', 'KtestController@create')->name('ktest.create');
