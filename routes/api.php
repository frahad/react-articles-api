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

$router->group(['prefix' => 'api'], function ($router) {
    $router->get('articles', 'ArticleController@index');
    $router->post('articles', 'ArticleController@store');
    $router->get('articles/{id}', 'ArticleController@show');
});
