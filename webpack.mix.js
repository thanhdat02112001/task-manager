const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/firebase-messaging-sw.js', 'public/')
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/myday.js', 'public/js')
    .js('resources/js/task_detail.js', 'public/js')
    .js('resources/js/chart.js', 'public/js')