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


Route::get('/', 'pagesController@index');


Route::resource('project' , 'ProjectsController');
Route::get('customer/{id}/project', 'ProjectsController@create');


Route::get('project/{id}/invoice', 'InvoicesController@create');
Route::put('offer/{id}', 'OffersController@statusChange');
Route::resource('offer' , 'OffersController');
Route::resource('action' , 'ActionsController');
Route::resource('home' , 'HomesController');
Route::resource('customer' , 'CustomersController');


Route::put('invoice/{invoice}/payed' , 'invoicesController@payed');
Route::resource('invoice' , 'InvoicesController');

Route::get('user/create' , 'pagesController@userCreate');


/*
 * Routes for //Auth::routes();
 */

Route::get('login', 'PagesController@index');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::put('/register', 'Auth\RegisterController@register');

