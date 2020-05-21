<?php

$router->get('', 'PagesController@home');

$router->get('tracks', 'TracksController@index');
$router->post('tracks', 'TracksController@store');