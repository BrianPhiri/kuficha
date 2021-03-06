let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['public/js/jquery.min.js', 'public/js/bootstrap.min.js'], 'public/js/bootquery.min.js')
   .js('resources/assets/js/app.js', 'public/js')
   .styles('public/css/bootstrap.min.css', 'public/css/bootstrap.min.css');