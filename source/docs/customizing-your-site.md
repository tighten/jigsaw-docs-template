---
title: Customizing Your Site
description: Customizing your Jigsaw docs site
extends: _layouts.documentation
section: content
---
# Customizing Your Site {#customizing}

## Styles

This starter template comes pre-loaded with [Tailwind CSS](https://tailwindcss.com), a utility CSS framework that allows you to customize and build complex designs without touching a line of CSS. There are also a few base CSS files in the `/source/_assets/sass` folder, set up with the expectation that you can add any custom CSS into them.

> You can re-work the architecture of the CSS includes any way you’d like; just make sure to keep the `@tailwind` references in your final files.

```scss
// source/_assets/sass/main.css

@import 'tailwindcss';

@import './base.css' layer(components);
@import './navigation.css' layer(components);
@import './documentation.css' layer(components);
```

---

## Typography Styles {#customizing-typography}

Here’s a quick preview of what some of the basic type styles will look like in this starter template:

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

</div>
