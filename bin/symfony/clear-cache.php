<?php
require_once dirname(__FILE__) . '/../bootstrap.php';

echo exec('php ' . APPLICATION_PATH . 'console cache:clear') . PHP_EOL;