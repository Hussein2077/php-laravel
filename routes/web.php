<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test', [
        'foo' => 'sss',
        'bar' => 'ssssssss',
        'baz' => 'vvvv',
        'qux' => 'quux',
    ]);
});
