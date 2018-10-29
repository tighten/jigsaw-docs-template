---
title: Navigation
extends: _layouts.documentation
section: documentation_content
---

# Navigation

In order to handle sites with a lot of URLs, the navigation is defined via a PHP Array in `navigation.php`, in the root directory. This consolidates all your routes in one place, to be consumed by a [Vue component](#vue-components) on the front-end. Nested Sub-Navigation URLs can be added by using the `children` associative Array.

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

## Vue Components

For clean and consistent markup, Vue components were added to consume the `navigation` configuration key. The `navigation.vue` component iterates over the multi-dimensional Array and renders a tree view structure, with dynamic anchor highlighting determined by the URL path. 

By default the navigation component is hidden on mobile views, so a `navigation-toggle` was also added to expose a hamburger menu to show/hide the component. 

```html
<!-- accessing Vue components in blade files -->
<navigation-toggle></navigation-toggle>
<navigation :links='@json($page->navigation)'></navigation>
```
