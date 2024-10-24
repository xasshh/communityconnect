const mix = require('laravel-mix');

mix.ts('resources/js/email.ts', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
