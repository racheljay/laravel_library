<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\BookController;

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

$router->post('/register','UsersController@register');

$router->get('books', 'BookController@index');
$router->get('book/{id}', 'BookController@show');

$router->get('author/{id}', 'AuthorController@show');
$router->get('authors', 'AuthorController@index');
$router->get('booksby/{author_id}', 'BookController@filter');

$router->post('addbook', 'BookController@create');
$router->put('editbook/{id}', 'BookController@update');

$router->delete('deletebook', 'BookController@delete');