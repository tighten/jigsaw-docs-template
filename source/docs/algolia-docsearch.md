---
title: Algolia DocSearch
description: Configure Algolia DocSearch with the Jigsaw docs starter template
extends: _layouts.documentation
section: content
---

# Algolia DocSearch {#algolia-docsearch}

This starter template includes support for [DocSearch](https://community.algolia.com/docsearch/), a documentation indexing and search tool provided by Algolia for free. To configure this tool, you’ll need to sign up with Algolia and set your API Key and index name in `config.php`. Algolia will then crawl your documentation regularly, and index all your content.

[Get your DocSearch credentials here.](https://community.algolia.com/docsearch/#join-docsearch-program)

```php
// config.php
return [
    'docsearchAppId' => '',
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
];
```

Once the `docsearchAppId`, `docsearchApiKey` and `docsearchIndexName` values are set in `config.php`, the search field at the top of the page is ready to use.

<img class="block m-auto" src="/assets/img/docsearch.webp" alt="Screenshot of search results" />

To help Algolia index your pages correctly, it's good practice to add a unique `id` or `name` attribute to each heading tag (`<h1>`, `<h2>`, etc.). By doing so, a user will be taken directly to the appropriate section of the page when they click a search result.

---

For more details, visit the [official Algolia DocSearch documentation.](https://community.algolia.com/docsearch/what-is-docsearch.html)
