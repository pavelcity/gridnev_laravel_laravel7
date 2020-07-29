<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});




Route::get('/', 'HomeController@index')->name(('home'));

Route::get('/catalog', 'CatalogController@index')->name('catalog');
Route::get('/catalog/{slug}', 'HomeController@detail')->name('catalog.detail');
Route::get('/tag/{slug}', 'HomeController@tag')->name('catalog.tags');
Route::get('/blog', 'BlogController@index')->name('blog.home');
Route::get('/shop', 'ShopController@index')->name('shop.home');
Route::get('/contacts', 'ContactsController@index')->name('contacts.home');



Route::group(['middleware' => 'auth'], function(){
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::post('/profile', 'ProfileController@store')->name('profile.store');
    Route::post('/catalog', 'HomeController@comment')->name('comment');
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', 'AuthController@registerForm');
    Route::post('/register', 'AuthController@register')->name('register');
    Route::get('/login', 'AuthController@loginForm')->name('login.form');
    Route::post('/login', 'AuthController@login')->name('login');
});









Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => 'admin'], function (){
    Route::get('/', 'AdminController@index');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/tags', 'TagsController');
    Route::resource('/users', 'UsersController');
    Route::resource('/catalog', 'CatalogController');
});
