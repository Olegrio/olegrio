<?php

require "vendor/autoload.php"

use Psr\Log\AbstractLogger;




define('TEMPLATE_PATH', './asset/tpl/');
include "./core/app.php";


App::run();