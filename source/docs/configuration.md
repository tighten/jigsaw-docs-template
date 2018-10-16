---
title: Configuration
extends: _layouts.documentation
section: documentation_content
---


# Configuration

This template uses the same configuration as [Jigsaw](https://jigsaw.tighten.co/docs/site-variables/). The `config.php` is where you can set your default environment variables.

```php
// config.php
return [
    'siteName' => 'App Docs',
    'title' => 'Documentation powered by Jigsaw',
    'description' => 'Give your documentation a boost with Jigsaw. Generate elegant, static, docs quickly and easily.',
    'copyrightHolder' => 'Company Name',
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
    'baseUrl' => 'http://appname.com/',
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

[Docsearch](https://community.algolia.com/docsearch/) is an open source index based search tool, built by [Algolia](https://www.algolia.com). Out-of-the-box the docs template is setup to use DocSearch, only the credentials are needed.

**Get your DocSearch credentials [here](https://community.algolia.com/docsearch/#join-docsearch-program)**

```php
// config.php
return [
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
];
```

Once the `docsearchApiKey` and `docsearchIndexName` are entered in the `config.php`, the markup will automatically use these values to power search form.

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