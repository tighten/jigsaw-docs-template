---
title: Algolia DocSearch
description: Configure Algolia DocSearch with the Jigsaw Docs Template
extends: _layouts.documentation
section: content
---

# Algolia DocSearch {#algolia-docsearch}

This template includes support for [DocSearch](https://community.algolia.com/docsearch/). DocSearch is a fantastic open source index-based search tool, built and managed by [Algolia](https://www.algolia.com). To configure this tool, you need to sign up with Algolia and receive an API key. Algolia will then crawl your documentation regularly, and index all your content.

[Get your DocSearch credentials here](https://community.algolia.com/docsearch/#join-docsearch-program).

Once the `docsearchApiKey` and `docsearchIndexName` values are set in `config.php`, the search field at the top of the page is ready to use.

```php
// config.php
return [
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
];
```

__<< TODO: Add screenshot of search dropdown >>__

---

## Adding Custom Styles {#algolia-adding-custom-styles}

If you'd like to customize the styling of the search results, Algolia exposes custom CSS classes that you can modify:

```css
/* Main dropdown wrapper */
.algolia-autocomplete .ds-dropdown-menu {
  width: 500px;
}

/* Main category (eg. Getting Started) */
.algolia-autocomplete .algolia-docsearch-suggestion--category-header {
  color: darkgray;
  border: 1px solid gray;
}

/* Category (eg. Downloads) */
.algolia-autocomplete .algolia-docsearch-suggestion--subcategory-column {
  color: gray;
}

/* Title (eg. Bootstrap CDN) */
.algolia-autocomplete .algolia-docsearch-suggestion--title {
  font-weight: bold;
  color: black;
}

/* Description description (eg. Bootstrap currently works...) */
.algolia-autocomplete .algolia-docsearch-suggestion--text {
  font-size: 0.8rem;
  color: gray;
}

/* Highlighted text */
.algolia-autocomplete .algolia-docsearch-suggestion--highlight {
  color: blue;
}
```

---

For more details, visit the [official Algolia DocSearch documentation](https://community.algolia.com/docsearch/what-is-docsearch.html).
