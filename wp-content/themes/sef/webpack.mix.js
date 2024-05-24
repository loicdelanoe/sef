let mix = require('laravel-mix');

mix.setPublicPath(`public`);

mix.sass(`resources/scss/main.scss`, `public/css`).sourceMaps()
    .js(`resources/js/main.js`, `public/js`)
    .copy('resources/img', 'public/img')
    .copy('resources/fonts', 'public/fonts')
    .options({
        processCssUrls: false,
        autoprefixer: { remove: false }
    });

mix.browserSync({
    proxy: '', // URL of your local website
    files: [
        '**/*.php',
        '**/*.js',
        '**/*.css'
    ]
});