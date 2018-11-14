<?php

return [
    'baseUrl' => 'http://jigsaw-docs-skeleton.test/',
    'production' => false,
    'siteName' => 'Docs Template',
    'siteDescription' => 'Elegant docs powered by Jigsaw',

    // DocSearch credentials
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];
