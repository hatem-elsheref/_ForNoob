<?php

use Framework\Router;


Router::get('/', 'Frontend\HomeController@index');

Router::get('/home', 'Frontend\HomeController@index');
