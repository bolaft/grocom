<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__.'/../lib/autoload.php';

// intl
if (!function_exists('intl_get_error_code')) {
    require_once __DIR__.'/../lib/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs/functions.php';

    $loader->add('', __DIR__.'/../lib/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs');
}

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

// Krumo
require_once __DIR__.'/../web/krumo/class.krumo.php';

// Patches
$dir = opendir(__DIR__.'/patches');

while (($filename = readdir($dir)) !== false)
{
    if (strpos($filename, '.php', 1)) {
    	require_once __DIR__.'/patches/'.$filename;
    }
}
closedir($dir);

return $loader;