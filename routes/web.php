<?php

//author : zulsyafiq
//date : 22/4/2017

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//route for states
Route::resource('states','StatesController');
//route for area
Route::resource('areas','AreasController');
Route::resource('categories','CategoriesController');
Route::resource('subcategories','SubcategoriesController');
Route::resource('brands','BrandsController');
Route::resource('listingtypes','ListingTypesController');
Route::resource('products','ProductsController');


