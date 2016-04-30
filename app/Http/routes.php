<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'PeopleController@index');

Route::get('list', 'PeopleController@index');

Route::get('ajouter', 'PeopleController@add');

Route::get('detail/{id}', ['as' => 'people.detail', 'uses' => 'PeopleController@Detail'])->where('id', '[0-9]+');

Route::post('create', 'PeopleController@create');

Route::get('modify', ['as' => 'people.modify', 'uses' => 'PeopleController@modify']);

Route::post('delete', 'PeopleController@delete');

Route::post('update', 'PeopleController@updateIndividual');




Route::controllers([

    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',

]);
