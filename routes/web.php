<?php


Route::get('/', function () {
    return view('welcome');
});

//Route::get('tickets','TicketController@index')->name('tickets.index');
Route::get('tickets/{ticket}/delete','TicketController@delete')->name('tickets.delete');
Route::resource('tickets','TicketController');
