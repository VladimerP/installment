<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'installment',
    'title'       => [
        'de' => 'Ratenzahlung',
        'en' => 'Installment',
    ],
    'description' => [
        'de' => 'Ratenzahlung für die Produkte einrichten.',
        'en' => 'Set up installments for the products.',
    ],
    'thumbnail'   => '',
    'version'     => '1.0',
    'author'      => 'Oxid Academy',
    'url'         => 'https://www.oxid-esales.com/',
    'email'       => 'academy@oxid-esales.com',
    'extend'      => [
        \OxidEsales\Eshop\Application\Model\Article::class => \vladimerp\installment\Model\Article::class,
        \OxidEsales\Eshop\Application\Controller\Admin\ArticleMain::class => \vladimerp\installment\Controller\Admin\ArticleMain::class,
    ],
    'blocks'      => [
        [
            'template' => 'article_main.tpl',
            'block'    => 'admin_article_main_extended',
            'file'     => 'views/admin/blocks/admin_productmain__installment_fields.tpl',
            'position' => '1',
        ],
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_tprice',
            'file'     => 'views/blocks/productmain__installment.tpl',
            'position' => '1',
        ]
    ],
    'settings'    => [],
];