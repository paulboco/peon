<?php

/*
|--------------------------------------------------------------------------
| Get Autoloader Configuration
|--------------------------------------------------------------------------
*/

$autoload = require __DIR__ . '/../config/autoload.php';

/*
|--------------------------------------------------------------------------
| Register The Autoloader
|--------------------------------------------------------------------------
*/

require __DIR__ . '/../vendors/phpfig/Autoloader.php';
$autoloader = new \Phpfig\Autoloader;
$autoloader->register();

/*
|--------------------------------------------------------------------------
| Register Namespaces
|--------------------------------------------------------------------------
*/

foreach ($autoload['namespaces'] as $namespace => $path) {
    $autoloader->addNamespace($namespace, __DIR__ . '/../' . $path);
}

/*
|--------------------------------------------------------------------------
| Require Any Files
|--------------------------------------------------------------------------
*/

foreach ($autoload['files'] as $path) {
    require(__DIR__ . '/../' . $path);
}

/*
|--------------------------------------------------------------------------
| Clean Up
|--------------------------------------------------------------------------
*/

unset($autoload, $autoloader, $namespace, $path);
