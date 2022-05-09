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

 mix.scripts([
    'public/js/jquery-3.6.0.min.js',
    'public/js/bootstrap.bundle.min.js',
    'public/js/swiper-bundle.min.js',
    // 'public/js/custom.js',
    'public/js/persian-date.min.js.js',
    'public/js/persian-datepicker.min.js',
    'public/js/ckeditor.js',
    'public/js/select2.min.js',
], 'public/js/all.js');
// mix.styles([
//     'public/css/bootstrap.rtl.min.css',
//     'public/css/swiper-bundle.min.css',
//     'public/css/fontiran.css',
//     'public/css/styles.css',
//     'public/css/index.css',
//     'public/css/contact-us.css',
//     'public/css/persian-datepicker.min.css',
//     'public/css/news.css',
//     'public/css/select2.min.css',
// ], 'public/css/all.css');
