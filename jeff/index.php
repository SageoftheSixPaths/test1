<?php
use App\Core\{Router, Request};
use App\Controllers\TodosController;
require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('routes.php')->direct(Request::uri(), Request::method());