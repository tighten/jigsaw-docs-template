---
title: Algolia DocSearch
extends: _layouts.documentation
section: documentation_content
---

# Algolia DocSearch

The Docs theme comes with [DocSearch](https://community.algolia.com/docsearch/) pre-installed. DocSearch is a fantastic open source index-based search tool, built and managed by [Algolia](https://www.algolia.com). To configure this tool, all you need is an API key and an index name. Algolia will then crawl your public URL and index all content.

[Get your DocSearch credentials here](https://community.algolia.com/docsearch/#join-docsearch-program).

Once the `docsearchApiKey` and `docsearchIndexName` values are set in `config.php`, the search form is ready to use.

```php
// config.php
return [
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
];
```

```html
<!-- source/layouts/master.blade.php -->
<div class="flex flex-1 align-right justify-end items-center">
    <input name="docsearch" type="text" id="docsearch" placeholder="Search"
        class="w-2/3 bg-grey-lighter outline-none px-4 py-2 rounded-full text-grey-darker transition-fast docsearch md:w-1/3">

    @yield('navigation')
</div>

<script type="text/javascript">
    docsearch({
        apiKey: '{{ $page->docsearchApiKey }}',
        indexName: '{{ $page->docsearchIndexName }}',
        inputSelector: '#docsearch'
    });
</script>
```

## Adding Custom Styles
Algolia exposes custom CSS classes to target in the event that you want to add your own styles.

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

[Official Algolia Documentation](https://community.algolia.com/docsearch/what-is-docsearch.html)
