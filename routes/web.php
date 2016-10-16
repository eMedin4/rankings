<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/aviso-legal', ['as' => 'legal', 'uses' => 'MainController@legal']);
Route::get('/contacto', ['as' => 'contact', 'uses' => 'MainController@contact']);
Route::post('/contacto', ['as' => 'postcontact', 'uses' => 'MainController@postContact']);


Route::get('/', ['as' => 'main', 'uses' => 'MainController@main']);
Route::get('/samsung-evo-750', ['as' => 'evo750', 'uses' => 'MainController@single']);
Route::get('/samsung-evo-850', ['as' => 'evo850', 'uses' => 'MainController@single']);
Route::get('/kingston-ssdnow-v300', ['as' => 'v300', 'uses' => 'MainController@single']);
Route::get('/kingston-ssdnow-uv400', ['as' => 'uv400', 'uses' => 'MainController@single']);
Route::get('/ssd-barato-menos-de-100', ['as' => 'max100', 'uses' => 'MainController@max100']);
Route::get('/ssd-menos-de-200', ['as' => 'max200', 'uses' => 'MainController@max200']);
Route::get('/mejor-ssd-de-128gb', ['as' => 'b128', 'uses' => 'MainController@b128']);
Route::get('/mejor-ssd-de-256gb', ['as' => 'b256', 'uses' => 'MainController@b256']);
Route::get('/mejor-ssd-de-512gb', ['as' => 'b512', 'uses' => 'MainController@b512']);
Route::get('/mejor-ssd-de-1tb', ['as' => 'b1tb', 'uses' => 'MainController@b1tb']);
Route::get('/mejor-ssd-m2', ['as' => 'fm2', 'uses' => 'MainController@fm2']);

/*
	Admin Area
*/

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    
    Route::get('/', 'DashboardController@main');
    Route::get('import', ['as' => 'import', 'uses' => 'ProductController@init']);
    Route::get('stats', ['as' => 'stats', 'uses' => 'DashboardController@stats']);

});

Auth::routes();
/*Deshabilitamos registros*/
Route::any('register', 'Auth\LoginController@showLoginForm');
