---
title: Algolia DocSearch
extends: _layouts.documentation
section: documentation_content
---

# Algolia DocSearch

This theme defaults to DocSearch for site wide searching. [DocSearch](https://community.algolia.com/docsearch/) is a fantastic open source index-based search tool, built by [Algolia](https://www.algolia.com). To set this up, all you need is an API key and an index name. 

[Get your DocSearch credentials here](https://community.algolia.com/docsearch/#join-docsearch-program).

Once the `docsearchApiKey` and `docsearchIndexName` are entered in `config.php`, your site will automatically use these values to power the search form.

```php
// config.php
return [
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
];
```

```html
<!-- /source/layouts/documentation.blade.php -->
<script type="text/javascript">
    docsearch({
        apiKey: '{{ $page->docsearchApiKey }}',
        indexName: '{{ $page->docsearchIndexName }}',
        inputSelector: '#docsearch'
    });
</script>
```
