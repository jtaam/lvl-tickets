<?php


Route::get('/', function () {
    return view('welcome');
});

//Route::get('tickets','TicketController@index')->name('tickets.index');
Route::resource('tickets','TicketController');