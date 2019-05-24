let mix = require('laravel-mix');

mix.js('js/app.js', './')
    .sass('sass/style.scss', './css/default.css');