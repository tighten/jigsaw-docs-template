---
title: Styling
extends: _layouts.documentation
section: documentation_content
---


# Styles

This template is built with [Tailwindcss](https://tailwindcss.com). Changing colors and the layout can all be done directly on html elements. For specificity rules, a few SCSS files have been created.

### Layouts
There are two core layouts in this template. The `documentation.blade.php` layout is what is used to parse the documentation files. If you need to style how your generated documentation looks, see the `_markdown.scss` file.

```scss
// source/_assets/sass/_markdown.scss
.markdown {
    a {
        @apply .text-blue;
    }

    blockquote {
        @apply .border-blue-light;
        @apply .border-l-4;
        @apply .font-normal;
        @apply .italic;
        @apply .my-8;
        @apply .pl-6;
        @apply .text-grey-darker;
        @apply .text-xl;
    }
```