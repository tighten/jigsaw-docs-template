---
title: Navigation
extends: _layouts.documentation
section: documentation_content
---

# Navigation

Navigation is configured via a PHP Array in the `navigation.php` file in the root directory. Nested Sub-Navigation items can be defined using the `children` associative array.

```php
// navigation.php
<?php

return [
    'Getting Started' => [
        'url' => '/docs/getting-started',
        'children' => [
            'DocSearch' => ['url' => '/docs/algolia-docsearch'],
            'Navigation' => ['url' => '/docs/navigation'],
            'Extending' => ['url' => '/docs/extending'],
        ],
    ],
    'Jigsaw Docs' => ['url' => 'https://jigsaw.tighten.co/docs/installation/'],
];
```
