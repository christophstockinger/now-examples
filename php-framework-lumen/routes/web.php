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

$router->get('/data', function () use ($router) {
    $data = array(
        "version" => $router->app->version(),
        "author" => "Christoph Stockinger",
        "company" => "Coding77"
    );
    return json_encode($data);
});
