const mix = require('laravel-mix');
mix.js('resources/js/app.js', 'js').
    sass('resources/sass/app.scss', 'css');
mix.browserSync('127.0.0.1:8000');
