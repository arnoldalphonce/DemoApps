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

// Dashboard Controller
Route::get('/dashboard', 'DashboardController@index');

// Pages Controller
Route::get('/', 'PagesController@getHome');

Route::get('/explorer', 'QuizzesController@index');

// Messages Controller
Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');

// Auth
Auth::routes();

Route::resource('questions', 'QuestionsController');

Route::get('questions', 'QuestionsController@show');