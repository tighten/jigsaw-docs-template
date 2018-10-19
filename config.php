<?php

return [
    'siteName' => 'Jigsaw Docs',
    'title' => 'Documentation powered by Jigsaw',
    'description' => 'Give your documentation a boost with Jigsaw. Generate elegant, static docs quickly and easily.',
    'copyrightHolder' => 'Tighten',
    'docsearchApiKey' => '',
    'docsearchIndexName' => 'jigsaw',
    'baseUrl' => 'http://jigsaw-docs-skeleton.test/',
    'production' => false,
    'navigation' => require_once('navigation.php'),

    // helpers
    'url' => function ($page, $path) {
        return rtrim($page->baseUrl, '/') . '/' . ltrim($path, '/');
    },
];
