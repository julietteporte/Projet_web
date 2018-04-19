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
Route::post('/shop', 'ShopController@store')->name('shop');
//Route::post('/shop', 'ShopController@storeCate')->name('shop');
Route::get('/shop/{ID}', 'ShopController@productDetail')->name('product_detail');


Route::get('/suggestion_box', 'SuggestionBoxController@index')->name('suggestion_box');
Route::get('/suggestion_box/{ID}/{TYPE}', 'SuggestionBoxController@addLike')->name('suggestion_box_add_like')->middleware('auth');

Route::get('/event', 'EventController@index')->name('event');
Route::get('/event/{ID}', 'EventController@eventDetail')->name('event_detail');
Route::post('/event/sendPicture', 'EventController@eventSendPicture')->name('event_send_picture');
Route::get('/event/{ID}/participation', 'EventController@participer')->name('event_participer')->middleware('auth');

Route::get('/cart_recap', 'CartController@index')->name('cart_recap');

Route::get('/search', 'SearchController@index')->name('search');
Route::post('/search', 'SearchController@index')->name('search');

Route::get('/contact_us', 'ContactUsController@index')->name('contact_us');

Route::get('/administration', 'AdministrationController@index')->name('administration');
Route::post('/administration', 'AdministrationController@store')->name('administration');
//Route::put('/administration', 'AdministrationController@update')->name('administration');
Route::resource('/administration/users', 'UserController')->middleware('member');
Route::resource('/administration/events', 'ManifestationController')->middleware('member');

Route::get('/submit_idea', 'SubmitIdeaController@index')->name('submit_idea')->middleware('auth');
Route::post('/submit_idea', 'SubmitIdeaController@submitSuggestion')->name('submit_idea')->middleware('auth');

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

Route::get('/map', function(){
    $config['center'] = 'Bordeaux';
    $config['zoom'] = '14';
    $config['map_height'] = '600px';
    $config['map_width'] = '600px';
    $config['scrollwheel'] = false;

    GMaps::initialize($config);

    $map = GMaps::create_map();

    return view('map')->with('map', $map);

});
