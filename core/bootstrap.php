<?php

use App\Core\App;

App::bind('config', require 'config.php');

//instantiate query builder and pass in PDO instance
App::bind('database', new QueryBuilder(
      Connection::make(App::get('config')['database']) //this is the PDO instance
));