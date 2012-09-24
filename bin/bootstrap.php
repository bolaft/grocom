<?php

set_time_limit(0);

defined('ROOT_PATH')
    || define('ROOT_PATH', dirname(__FILE__) . '/../');

defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', dirname(__FILE__) . '/../app/');

require_once APPLICATION_PATH . '/bootstrap.php.cache';
require_once APPLICATION_PATH . '/AppKernel.php';