
<?php

require 'vendor/autoload.php'; // Composer class dependencies
require 'core/bootstrap.php'; // this delegates the config and db stuff

use App\Core\{Router, Request};

Router::load('app/routes.php')->direct(Request::uri(), Request::method());