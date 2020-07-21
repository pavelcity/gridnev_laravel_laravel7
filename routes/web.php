<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index');
Route::get('/catalog/{slug}', 'HomeController@detail')->name('catalog.detail');
Route::get('/tag/{slug}', 'HomeController@tag')->name('catalog.tags');




Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function (){
    Route::get('/', 'AdminController@index');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/tags', 'TagsController');
    Route::resource('/users', 'UsersController');
    Route::resource('/catalog', 'CatalogController');
});
