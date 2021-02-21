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

mix.copyDirectory('resources/js', 'public/js')
    .copyDirectory('resources/css/', 'public/css')
    .copyDirectory('resources/images', 'public/images');

// drink more strength more activity saw on television on night, don't wath much television, do simething else like make phone call,
