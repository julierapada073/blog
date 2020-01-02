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

Route::get('/posts', 'PostsController@index' );
Route::get('/posts/edit', 'PostsController@edit' );

Route::get('/p1', 'TasksController@store' );

Route::get('/task', 'TasksController@index' );
Route::get('/task/create', 'TasksController@create' );
Route::get('/task/update', 'TasksController@update' );

Route::get('/p2', 'ItemsController@create' );
Route::get('/p3/p4', 'ProjectsController@update' );
Route::get('/p5', 'PagesController@delete' );
Route::get('/p6', 'PagesController@store' );

Route::get('/members', 'MembersController@index' );

Route::get('/bookings', 'BookingsController@index');
Route::get('/bookings/create', 'BookingsController@create');
Route::get('/bookings/update', 'BookingsController@update');
Route::get('/bookings/delete', 'BookingsController@delete');
Route::get('/bookings/filter', 'BookingsController@filter');

