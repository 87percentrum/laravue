const mix = require('laravel-mix');
require('vuetifyjs-mix-extension');
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

mix
    .js('resources/js/app.js', 'public/js')
    .vue()
    .vuetify('vuetify-loader', 'resources/scss/variables.scss')
    .sass('resources/scss/app.scss', 'public/css/style.css', {
        sassOptions: {
            outputStyle: 'compressed'
        }
    });
