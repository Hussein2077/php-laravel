<?php

use App\Http\Controllers\Hussin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 

Route::get('/posts',[Hussin::class, 'testAction']);
//1- define a new route so the user can access it through browser
//2- define controller that renders a view
//3- define view that contains list of posts
//4- remove any static html data from the view