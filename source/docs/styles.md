---
title: Styling
extends: _layouts.documentation
section: documentation_content
---


# Styles

This template uses [Tailwind CSS](https://tailwindcss.com), so you can customize your design directly in your Blade templates. In addition, you'll find some base SCSS files in `source_assets/sass`, which you are free to modify or extend.

### Layouts
There are two core layouts in this template. The `documentation.blade.php` layout is what is used to parse the documentation files. If you need to style how your generated documentation looks, see the `_content.scss` file.

```scss
// source/_assets/sass/_content.scss
.content {
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
