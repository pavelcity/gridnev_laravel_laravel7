<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});




Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function (){
    Route::get('/', 'AdminController@index');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/tags', 'TagsController');
    Route::resource('/users', 'UsersController');
});
