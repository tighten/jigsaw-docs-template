---
title: Getting Started
extends: _layouts.documentation
section: documentation_content
---

# Getting Started

The Docs theme is a simple, modern, front-end theme for your Jigsaw projects––making it even easier to make beautify static driven documentation. Getting started is easy and only requires minimal configuration. 

## Configuration
Built on Jigsaw, the configuration file is `/config.php`. Here is where you change the variables such as `siteName` and `siteDescription` with your information.

```php
// config.php
return [
    'siteName' => 'My Site',
    'siteDescription' => 'Give your documentation a boost with Jigsaw. Generate elegant, static docs quickly and easily.',
    'title' => 'Documentation powered by Jigsaw',
    'copyrightHolder' => 'My Name',
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
    'baseUrl' => 'http://my-awesome-jigsaw-site.com/',
    'production' => false,
    'navigation' => require_once('navigation.php'),

    // helpers
    'url' => function ($page, $path) {
        return rtrim($page->baseUrl, '/') . '/' . ltrim($path, '/');
    },
];
```

> Tip: If you need to extend the configuration, see the documentation for [site variables](https://jigsaw.tighten.co/docs/site-variables/) and [collections](https://jigsaw.tighten.co/docs/collections/)

### Adding Content
Jigsaw supports a variety of [file types](http://jigsaw.tighten.co/docs/content-other-file-types/) for your content. By default this theme uses the `source/docs/` directory to store all markdown pages. If you want to change this location, be sure to update the url references in `navigation.php`. [Read more about this themes navigation](/docs/navigation).  

The top of every content page should have a YAML code block that defines how it is rendered. The `title` is used to dynamically generate html `<title></title>` tags. The `extends` and `section` variables reference the layout and the target content area. [Read more about layouts](/docs/extending).

```yaml
---
title: Navigation
extends: _layouts.documentation
section: documentation_content
---
```

### Add assets
If you have any JavaScript or Sass assets, they can be added to the `source/_assets/` directory, and Laravel Mix will process them when running `npm run local` or `npm run production`.  

For images, you commit them directly to `source/assets/img/`, _note there is no underscore_. Be sure to replace `source/assets/logo.svg` with your own logo.


## Building
```bash
# build static files with Jigsaw
$ ./vendor/bin/jigsaw build

# compile assets with Laravel Mix
# options(dev, staging, production)
npm run dev
```
