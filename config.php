<?php

return [
    'docsTitle' => 'Jigsaw Docs',
    'docsDescription' => 'The documentation for the Jigsaw static site generator.',
    'copyrightHolder' => 'Tighten',
    'baseUrl' => 'http://jigsaw-docs-skeleton.test/',
    'production' => false,
    'collections' => [
    ],
    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'url' => function ($page, $path) {
        return rtrim($page->baseUrl, '/') . '/' . ltrim($path, '/');
    },
];
