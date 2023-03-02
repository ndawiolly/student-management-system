import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/style.scss',
                'resources/js/app.js',
                'resources/js/script.js',
                'resources/js/navdrop.js',
            ],
            refresh: true,
        }),
    ],
});
