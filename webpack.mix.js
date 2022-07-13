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
    .js('resources/js/vue/main.js', 'public/js')
    .sass('resources/sass/pages/auth.scss', 'public/css/pages')
    .sass('resources/sass/pages/personalized.scss', 'public/css/pages')
    .sass('resources/sass/pages/vue.scss', 'public/css/pages')
    .postCss('resources/css/app.css', 'public/css/tailwind.css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]).vue();

if (mix.inProduction()) {
    mix.version();
}
