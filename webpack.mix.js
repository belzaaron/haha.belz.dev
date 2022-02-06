const mix = require('laravel-mix');
mix.disableNotifications();

mix.postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);
