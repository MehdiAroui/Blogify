<?php

use Illuminate\Support\Facades\Route;

Route::get('/blogify', 'HomeController@index')->name('blogify');
