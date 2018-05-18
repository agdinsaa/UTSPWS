<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

	$router->get('/categories', 'CategoriesController@index');
	$router->get('/categories/{id}', 'CategoriesController@show');
	$router->post('/categories', 'CategoriesController@store');
	$router->put('/categories/{id}', 'CategoriesController@update');
	$router->delete('/categories/{id}', 'CategoriesController@destroy');
	
	$router->get('/books', 'BookController@index');
	$router->get('/books/{kd_buku}', 'BookController@show');
	$router->post('/books', 'BookController@store');
	$router->put('/books/{kd_buku}', 'BookController@update');
	$router->delete('/books/{kd_buku}', 'BookController@destroy');