---
extends: _layouts.documentation
section: documentation_content
---

## Installation

### System Requirements

To use Jigsaw, you need to have PHP 7 and [Composer](https://getcomposer.org/) installed on your machine. You'll also optionally need Node.js and NPM installed if you want to use [Laravel Mix](https://laravel.com/docs/5.6/mix) to compile your CSS and Javascript.

---

### 1. Create the Project Directory

First, create a new directory for your site:

```
$ mkdir my-site
```

### 2. Install Jigsaw via Composer:

Next, navigate to your new project directory and install Jigsaw using Composer:

```
$ cd my-site
$ composer require tightenco/jigsaw
```

> Make sure `~/.composer/vendor/bin` is in your `$PATH`.

### 3. Initialize your Project

Finally, from your project directory, run Jigsaw's `init` command to scaffold the default directory structure:

```
$ ./vendor/bin/jigsaw init
```

---

### Directory structure

By default, Jigsaw gives you the following directory structure:

![Default directory structure](../../img/directory-structure.png)

The `source` directory contains the actual contents of your site. This is where all of your site's pages, CSS, Javascript, images, etc. will be kept.

At the root of the directory, Jigsaw provides `webpack.mix.js` and `package.json` for compiling your assets, and a `config.php` file where you can specify variables to be made available in your templates.

Next, learn about [building and previewing your site](../building-and-previewing).
