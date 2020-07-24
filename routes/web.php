<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index');

Route::get('/catalog', 'CatalogController@index')->name('catalog');
Route::get('/catalog/{slug}', 'HomeController@detail')->name('catalog.detail');

Route::get('/tag/{slug}', 'HomeController@tag')->name('catalog.tags');

Route::get('/blog', 'BlogController@index')->name('blog.home');

Route::get('/shop', 'ShopController@index')->name('shop.home');

Route::get('/contacts', 'ContactsController@index')->name('contacts.home');





Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function (){
    Route::get('/', 'AdminController@index');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/tags', 'TagsController');
    Route::resource('/users', 'UsersController');
    Route::resource('/catalog', 'CatalogController');
});
