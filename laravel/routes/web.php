<?php

Route::get('/', function () {
    return view('loc.index');
});
Route::get('/recu', 'test@index');
