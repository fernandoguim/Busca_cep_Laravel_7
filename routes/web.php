<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EnderecoController@index')->name('home');

Route::get('/adicionar', 'EnderecoController@adicionar')->name('adicionar');

Route::get('/buscar', 'EnderecoController@buscar')->name('buscar');

Route::post('/salvar', 'EnderecoController@salvar')->name('salvar');
