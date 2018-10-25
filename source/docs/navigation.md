---
title: Navigation
extends: _layouts.documentation
section: documentation_content
---


# Navigation

Navigation is configured via a PHP Array in the `navigation.php` file in the root directory. Sub-navigation items can be defined using the `children` associative array.

```php
// navigation.php
return [
    'Getting Started' => [
        'url' => '/docs/getting-started',
        'children' => [
            'Configuration' => ['url' => '/docs/configuration'],
            'Navigation' => ['url' => '/docs/navigation'],
            'Styles' => ['url' => '/docs/styles'],
        ],
    ],
    'Sample Page' => ['url' => '/docs/sample-page'],
    'Jigsaw' => ['url' => 'https://jigsaw.tighten.co'],
];
```

> All documentation content is located at `source/docs/`
