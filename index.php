<?php

use Pagekit\Application;

return [

    'name' => 'webtoken/ecommerce',

    'main' => function(Application $app) {

    },

    'autoload' => [
        'Webtoken\\Ecommerce\\' => 'src'
    ],

    'resources' => [
        'ecommerce:' => ''
    ],

    'routes' => [
        '@ecommerce' => [
            'path' => '/ecommerce',
            'controller' => 'Webtoken\\Ecommerce\\Controller\\EcommerceController'
        ]
    ],

    'config' => [
        'entries' => [
            ['message' => 'Buy milk.', 'done' => false],
            ['message' => 'Read book.', 'done' => false],
            ['message' => 'Drink coffee.', 'done' => true]
        ]
    ],

    'menu' => [

        'ecommerce' => [
            'label'  => 'E-commerce',
            'icon'   => 'app/system/assets/images/placeholder-icon.svg',
            'url'    => '@ecommerce',
            'active' => '@ecommerce/*',
            'access' => 'ecommerce: manage'
        ]

    ],

];
