<?php

use App\Core\App;

App::bind('config', require 'config.php');

// instantiate query builder and pass in pdo instance
App::bind('database', new QueryBuilder(
      Connection::make(App::get('config')['database']) //this is the pdo instance
));