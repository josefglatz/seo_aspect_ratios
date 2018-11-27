<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey, $table) {
        /**
         * Configure additional column configuration
         */
        $additionalColumnConfiguration = [
            'config' => [
                'overrideChildTca' => [
                    'columns' => [
                        'crop' => [
                            'config' => [
                                'cropVariants' => [
                                    'social' => [
                                        'allowedAspectRatios' => [
                                            '16:9' => [
                                                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
                                                'value' => 16 / 9
                                            ],
                                            '9:16' => [
                                                'title' => 'LLL:EXT:seo_aspect_ratios/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.9_16',
                                                'value' => 9 / 16
                                            ],
                                            '4:5' => [
                                                'title' => 'LLL:EXT:seo_aspect_ratios/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_5',
                                                'value' => 4 / 5
                                            ],
                                            '3:2' => [
                                                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                                                'value' => 3 / 2
                                            ],
                                            '2:3' => [
                                                'title' => 'LLL:EXT:seo_aspect_ratios/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.2_3',
                                                'value' => 2 / 3
                                            ],
                                            '1:1' => [
                                                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                                                'value' => 1.0
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        /**
         * Apply additional column configuration on
         *
         *   - pages.og_images
         *   - pages.twitter_image
         */
        $GLOBALS['TCA'][$table]['columns']['og_image'] = array_replace_recursive($GLOBALS['TCA'][$table]['columns']['og_image'], $additionalColumnConfiguration);
        $GLOBALS['TCA'][$table]['columns']['twitter_image'] = array_replace_recursive($GLOBALS['TCA'][$table]['columns']['twitter_image'], $additionalColumnConfiguration);
    },
    'seo_aspect_ratios',
    'pages'
);
