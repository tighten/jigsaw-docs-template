<?php

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Docs Starter Template',
    'siteDescription' => 'Beautiful docs powered by Jigsaw',
    'siteAuthor' => 'Author Name',

    // Algolia DocSearch credentials
    'docsearchApiKey' => 'xxx',
    'docsearchIndexName' => 'xxx',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers

    // blog and docs helper
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
    // docs helper
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    // docs helper
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },

    // blog helper: collections
    'collections' => [
        'posts' => [
            'author' => 'Author Name', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'categories' => [
            'path' => '/blog/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
    ],

    // blog helper
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    // blog helper
    'getExcerpt' => function ($page, $length = 255) {
        $content = $page->excerpt ?? $page->getContent();
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
];
