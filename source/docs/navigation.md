---
title: Navigation
extends: _layouts.documentation
section: content
---

# Navigation {#navigation}

The navigation menu in the left-hand sidebar is defined using an array in `navigation.php`. Nested pages can be added by using the `children` associative array.

```php
<?php
// navigation.php

return [
    'Getting Started' => [
        'url' => '/docs/getting-started',
        'children' => [
            'Customizing Your Site' => ['url' => '/docs/customizing-your-site'],
            'Navigation' => ['url' => '/docs/navigation'],
            'Algolia DocSearch' => ['url' => '/docs/algolia-docsearch'],
            'Custom 404 Page' => ['url' => '/docs/404'],
        ],
    ],
    'Jigsaw Docs' => ['url' => 'https://jigsaw.tighten.co/docs/installation'],
];

// config.php
'navigation' => require_once('navigation.php'),

// blade files
$page->navigation
```
