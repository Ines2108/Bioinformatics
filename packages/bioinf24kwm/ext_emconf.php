<?php

/**
 * Extension Manager/Repository config file for ext "bioinf24kwm".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'bioinf24kwm',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fhooe\\Bioinf24kwm\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Ines Niedermaier',
    'author_email' => 's2210456021@fhooe.at',
    'author_company' => 'FHOOE',
    'version' => '1.0.0',
];
