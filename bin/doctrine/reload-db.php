<?php

require_once dirname(__FILE__) . '/../bootstrap.php';

echo exec('php ' . APPLICATION_PATH . 'console doctrine:schema:drop --force') . PHP_EOL;
echo exec('php ' . APPLICATION_PATH . 'console doctrine:schema:create') . PHP_EOL;
echo 'Type "y" to proceed, "n" to cancel' . PHP_EOL;
echo exec('php ' . APPLICATION_PATH . 'console doctrine:fixtures:load') . PHP_EOL;