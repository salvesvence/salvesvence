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

Route::get('/', [
    'as' => 'welcome',
    'uses' => 'PagesController@welcome'
]);

Route::get('me', [
    'as' => 'me',
    'uses' => 'PagesController@me'
]);

Route::get('blog', [
    'as' => 'blog',
    'uses' => 'PagesController@blog'
]);

Route::get('projects', [
    'as' => 'projects',
    'uses' => 'PagesController@projects'
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'PagesController@contact'
]);

Route::auth();

Route::get('/home', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| Categories Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('categories', 'CategoriesController', ['except' =>
    ['destroy']
]);

Route::get('categories/{slug}/delete', [
    'as' => 'categories.destroy',
    'uses' => 'CategoriesController@destroy'
]);


/*
|--------------------------------------------------------------------------
| Tags Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('tags', 'TagsController');


/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('posts', 'PostsController');