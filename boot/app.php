<?php

/*
|-------------------------------------------------------------------------------
| Create The Application
|-------------------------------------------------------------------------------
*/

$app = new Peon\App(
    realpath(__DIR__.'/../')
);

/*
|-------------------------------------------------------------------------------
| Register Configured Services
|-------------------------------------------------------------------------------
*/

$app->registerServices();

return $app;
