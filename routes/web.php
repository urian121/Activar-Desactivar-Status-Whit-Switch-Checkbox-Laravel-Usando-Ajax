<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'NoticiasController@noticiasHome')->name('noticiasHome');



Route::get('/eje', 'NoticiasController@ejemplo')->name('ejemplo');
Route::get('StatusNoticia', 'NoticiasController@UpdateStatusNoti')->name('UpdateStatusNoti');
