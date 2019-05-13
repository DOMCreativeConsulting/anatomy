<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

if(!isset($_SESSION['logado']))
{
    session_start();
}

Router::load('app/routes.php')->direct(Request::uri(), Request::method());