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

---

## Vue.js Components {#navigation-vue-js-components}

The navigation menu is built by a Vue.js component named `navigation.vue`. This component iterates over the multi-dimensional array from `navigation.php` and renders a tree view structure. The component will also automatically highlight the active page in the menu.

By default, the navigation menu is hidden on mobile views, so the `navigation-toggle` component can be used to display a button which shows or hides the navigation menu.

```html
<!-- accessing Vue components in blade files -->
<navigation-toggle></navigation-toggle>
<navigation :links='@json($page->navigation)'></navigation>
```
