---
title: Configuration
extends: _layouts.documentation
section: documentation_content
---


# Configuration

This template uses the same configuration as [Jigsaw](https://jigsaw.tighten.co/docs/site-variables/). The `config.php` file is where you can set your default site variables.

```php
// config.php
return [
    'siteName' => 'Jigsaw Docs',
    'siteDescription' => 'Give your documentation a boost with Jigsaw. Generate elegant, static docs quickly and easily.',
    'title' => 'Documentation powered by Jigsaw',
    'copyrightHolder' => 'Tighten',
    'docsearchApiKey' => '',
    'docsearchIndexName' => 'jigsaw',
    'baseUrl' => 'http://jigsaw-docs-skeleton.test/',
    'production' => false,
    'navigation' => require_once('navigation.php'),

    // helpers
    'url' => function ($page, $path) {
        return rtrim($page->baseUrl, '/') . '/' . ltrim($path, '/');
    },
];
```
> When creating content, the `title` variable can be overwritten to dynamically generate proper SEO page titles.

## Algolia Docsearch

[Docsearch](https://community.algolia.com/docsearch/) is an open-source index-based search tool, built by [Algolia](https://www.algolia.com). This template is setup to use DocSearch out of the box by simply adding your credentials.

**Get your DocSearch credentials [here](https://community.algolia.com/docsearch/#join-docsearch-program)**

```php
// config.php
return [
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
];
```

Once the `docsearchApiKey` and `docsearchIndexName` are entered in `config.php`, your site will automatically use these values to power the search form.

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
