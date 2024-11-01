<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Common aspect ratios for ext:seo',
    'description' => 'Common aspect ratios for the TYPO3 CMS system extension typo3/cms-seo',
    'category' => 'Theme',
    'author' => 'Josef Glatz',
    'author_email' => 'typo3@josefglatz.at',
    'author_company' => 'https://jousch.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.1',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '9.5.0-13.4.99',
                    'seo' => '9.5.0-13.4.99',
                ],
            'conflicts' =>
                [
                ],
            'suggests' =>
                [
                ],
        ],
];
