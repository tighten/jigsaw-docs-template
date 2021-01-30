const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.js('source/_assets/js/main.js', 'js')
    .css('source/_assets/css/main.css', 'css/main.css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('postcss-nesting'),
    ])
    .jigsaw({
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.scss'],
    })
    .options({ processCssUrls: false })
    .sourceMaps()
    .version();
