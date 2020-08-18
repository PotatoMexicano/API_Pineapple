<?php
$router->get('/api/cars', 'CarsController@index');
$router->get('/api/cars/{id}', 'CarsController@find');
$router->post('/api/cars', 'CarsController@store');
$router->delete('/api/cars/{id}', 'CarsController@destroy');
$router->put('api/cars/{id}','CarsController@update');


//route test
$router->get('api/cars/ss','CarsController@showAll');

$router->post('api/auth', 'AuthController@auth');
