import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/global.js',
                'resources/js/home.js',
                'resources/sass/main.scss'
            ],
            refresh: true,
        }),
    ],
});
4