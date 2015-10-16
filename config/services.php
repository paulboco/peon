<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Register Services
    |--------------------------------------------------------------------------
    */

    'config' => function() {
        return new Peon\Config;
    },

    'pdo' => function() {
        return new PDO('mysql:dbname=peon;host=localhost', 'root', 'root');
    },

    'request' => function() {
        return new Peon\Request;
    },

    'resolver' => function() {
        return new Peon\Resolver;
    },

    'response' => function() {
        return new Peon\Response(new Peon\View);
    },

    'router' => function() {
        return new Peon\Router(new Peon\Resolver, new Peon\Response(new Peon\View));
    },

    'session' => function() {
        return new Peon\Session;
    },

    'view' => function() {
        return new Peon\View;
    },

);