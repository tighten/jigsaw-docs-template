<?php

return [
    'docsTitle' => 'Jigsaw Docs',
    'docsDescription' => 'The documentation for the Jigsaw static site generator.',
    'copyrightHolder' => 'Tighten',
    'docsearchApiKey' => '',
    'docsearchIndexName' => 'jigsaw',
    'baseUrl' => 'http://jigsaw-docs-skeleton.test/',
    'production' => false,
    'collections' => [
    ],
    'navigation' => require_once('navigation.php'),

    // helpers
    'url' => function ($page, $path) {
        return rtrim($page->baseUrl, '/') . '/' . ltrim($path, '/');
    },
];
