<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');


$router->get('users', 'UsersController@index');
$router->get('users/delete', 'UsersController@delete');
$router->get('users/edit', 'UsersController@edit');

$router->post('users', 'UsersController@store');
$router->post('users/edit', 'UsersController@update');

$router->get('tasks', 'TasksController@index');
$router->get('tasks/delete', 'TasksController@delete');
$router->get('tasks/edit', 'TasksController@edit');
$router->post('tasks', 'TasksController@store');
$router->post('tasks/edit', 'TasksController@update');
