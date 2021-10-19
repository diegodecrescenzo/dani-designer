const mix = require('laravel-mix');

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

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.css',
    'resources/views/site/css/reset.css',
    'resources/views/site/css/style.css'
], 'public/site/css/style.css')

.scripts('node_modules/jquery/dist/jquery.js', 'public/site/js/jquery.js')
.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/site/js/boostrap.js')
    .scripts('resources/views/site/js/script.js', 'public/site/js/script.js')
    .version();
