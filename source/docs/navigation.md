---
title: Navigation
extends: _layouts.documentation
section: documentation_content
---

# Navigation

The navigation menu in the left-hand sidebar is defined via a PHP array in `navigation.php`, in the root directory. This consolidates all your routes in one place, to be consumed by a Vue Component on the front-end. Nested URLs can be added by using the `children` associative array.

```php
<?php
// navigation.php
return [
    'Getting Started' => [
        'url' => '/docs/getting-started',
        'children' => [
            'DocSearch' => ['url' => '/docs/algolia-docsearch'],
            'Navigation' => ['url' => '/docs/navigation'],
            'Extending' => ['url' => '/docs/extending'],
        ],
    ],
    'Jigsaw Docs' => ['url' => 'https://jigsaw.tighten.co/docs/installation'],
];

// config.php
'navigation' => require_once('navigation.php'),

// blade files
$page->navigation
```
<a name="vue-components"></a>

---

## Vue Components

For clean and consistent markup, Vue components were added to consume the `navigation` configuration key. The `navigation.vue` component iterates over the multi-dimensional array and renders a tree view structure, with dynamic anchor highlighting determined by the URL path.

By default the navigation component is hidden on mobile views, so the `navigation-toggle` can be used to display a hamburger menu to show/hide the component.

```html
<!-- accessing Vue components in blade files -->
<navigation-toggle></navigation-toggle>
<navigation :links='@json($page->navigation)'></navigation>
```
