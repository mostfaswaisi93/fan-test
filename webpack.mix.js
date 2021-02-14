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



mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');


mix.styles([
    'public/plugin/css/theme_style.css',

],'public/css/style.css').version();

// mix.js([
//     'public/plugin/js/jquery.min.js',
//     'public/plugin/js/bootstrap/js/bootstrap.min.js',
//     'public/plugin/js/jquery.blockui.min.js',
//     'public/plugin/js/bootstrap-switch/js/bootstrap-switch.min.js',
//     'public/plugin/js/counterup/jquery.waypoints.min.js',
//     'public/plugin/js/counterup/jquery.counterup.min.js',
//     'public/plugin/js/jquery.slimscroll.js',
//     'public/plugin/js/app.js',
//     'public/plugin/js/layout.js',
//     'public/plugin/js/chart-js/Chart.bundle.js',
//     'public/plugin/js/chart-js/utils.js',
//     'public/plugin/js/chart-js/home-data.js',
//     'public/plugin/js/theme-color.js',
//
// ],'public/js/javascript.js').version();
