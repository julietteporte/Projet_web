<?php

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

Route::get('/account', function(){
  $name = Auth::user()->prenom ;
  return view('account', ['name' => $name]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/suggestion_box', 'SuggestionBoxController@index')->name('suggestion_box');
Route::get('/event', 'EventController@index')->name('event');
Route::get('/about_us', 'AboutUsController@index')->name('about_us');
Route::get('/partners', 'PartnersController@index')->name('partners');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/search', 'SearchController@index')->name('search');//petit bug encore
Route::get('/contact_us', 'ContactUsController@index')->name('contact_us');
Route::get('/legal_notice', 'HomeController@index')->name('legal_notice');
Route::get('/terms_conditions', 'HomeController@index')->name('terms_conditions');
Route::get('/confidentiality', 'HomeController@index')->name('confidentiality');
