<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('requests', 'RequestsController@index')->name('requests');
