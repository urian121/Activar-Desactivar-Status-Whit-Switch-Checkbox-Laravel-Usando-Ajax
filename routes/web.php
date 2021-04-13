<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'NoticiasController@noticiasHome')->name('noticiasHome');
Route::get('StatusNoticia', 'NoticiasController@UpdateStatusNoti')->name('UpdateStatusNoti');
