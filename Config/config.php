<?php

declare(strict_types=1);

return [
    'name' => 'Fran Bundle',
    'description' => 'Fran Bundle',
    'author' => 'Fran',
    'version' => '1.0',
    'routes' => [
        'public' => [
            'mautic_fran_index' => [
                'path' => '/fran',
                'controller' => 'FranBundle:Default:index',
            ],
        ],
        'main' => [
            'mautic_fran_index' => [
                'path' => '/fran/{page}',
                'controller' => 'FranBundle:Default:index',
            ],
        ],
    ],
];