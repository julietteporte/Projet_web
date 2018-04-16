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


Route::get('/language/{lang}', 'HomeController@language');

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
Route::get('/cart_recap', 'CartController@index')->name('cart_recap');
Route::get('/search', 'SearchController@index')->name('search');

Route::post('/search', 'SearchController@index')->name('search');
Route::get('/contact_us', 'ContactUsController@index')->name('contact_us');
Route::get('/administration', 'AdministrationController@index')->name('administration');
Route::get('/submit_idea', 'SubmitIdeaController@index')->name('submit_idea');

Route::get('/confidentiality', function () {
    return view('confidentiality');
});

Route::get('/legal_notice', function () {
    return view('legal_notice');
});

Route::get('/terms_conditions', function () {
    return view('terms_conditions');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/partners', function () {
    return view('partners');
});
