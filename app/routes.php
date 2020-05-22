<?php

$router->get('', 'PagesController@home');
$router->get('tracks', 'TracksController@index');
$router->get('search', 'TracksController@filter');
$router->post('tracks', 'TracksController@store');