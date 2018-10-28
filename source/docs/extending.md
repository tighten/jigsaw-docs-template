---
title: Styling
extends: _layouts.documentation
section: documentation_content
---
# Extending
This theme has been designed to be easily customized and extended.

## Styles

This template uses [Tailwind CSS](https://tailwindcss.com), so you can customize your design directly in your Blade templates. In addition, you'll find some base SCSS files in `source/assets/sass`, which you are free to modify or extend. Out of the box, a `_documentation.scss` file is created for your custom styles.

```scss
// source/_assets/sass/main.scss
@tailwind preflight;
@tailwind components;

@import 'base';
@import 'navigation';
@import 'documentation';

// Code syntax highlighting,
// powered by https://highlightjs.org
@import '~highlightjs/styles/default';

@tailwind utilities;
```

## Typography Styles

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
