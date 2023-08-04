<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'VT20',
    'description' => 'Sitepackage for TYPO3 11',
    'catefory' => 'templates',
    'author' => 'medo',
    'author_email' => 'info@medo98.com',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ]
];