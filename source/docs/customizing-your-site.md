---
title: Customizing Your Site
extends: _layouts.documentation
section: content
---
# Customizing Your Site {#customizing}

## Styles {#customizing-styles}

This template includes [Tailwind CSS](https://tailwindcss.com), allowing you to customize your design directly in your Blade templates. In addition, you'll find some base SCSS files in `/source/_assets/sass/` which you are free to modify or extend. Out of the box, a blank `_documentation.scss` stylesheet is created for your custom styles.

```scss
// source/_assets/sass/main.scss

@tailwind preflight;
@tailwind components;

// Code syntax highlighting,
// powered by https://highlightjs.org
@import '~highlight.js/styles/github.css';

@import 'base';
@import 'navigation';
@import 'documentation';

@tailwind utilities;
```

---

## Typography Styles {#customizing-typography}

<div markdown="1" class="example pt-6">

# h1 Heading
## h2 Heading
### h3 Heading
#### h4 Heading
##### h5 Heading
###### h6 Heading

The quick brown fox jumps over the lazy dog

<s>The quick brown fox jumps over the lazy dog</s>

<u>The quick brown fox jumps over the lazy dog</u>

_The quick brown fox jumps over the lazy dog_

**The quick brown fox jumps over the lazy dog**

`The quick brown fox jumps over the lazy dog`

<small>The quick brown fox jumps over the lazy dog</small>

> The quick brown fox jumps over the lazy dog

[The quick brown fox jumps over the lazy dog](#)

```php
class Foo extends bar
{
    public function fooBar()
    {
        //
    }
}
```
