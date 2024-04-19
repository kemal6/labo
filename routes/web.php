<?php

use Illuminate\Support\Facades\Route;

// Doctorat

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/doctorat','App\Http\Controllers\TheseController@direct')->name('doctorat');

Route::get('/thesesec','App\Http\Controllers\TheseController@index')->name('thesesec');

Route::get('/theseses','App\Http\Controllers\TheseController@indexs')->name('theseses');


// Master

Route::get('/master','App\Http\Controllers\TheseController@directm')->name('master');

Route::get('/mastersec','App\Http\Controllers\TheseController@indexm')->name('mastersec');

Route::get('/masterses','App\Http\Controllers\TheseController@indexsm')->name('masterses');

//Publications

Route::get('/publications','App\Http\Controllers\PublicationController@index')->name('publications');

//Manifestations

Route::get('/manifestations','App\Http\Controllers\ActualiteController@index')->name('manifestations');
