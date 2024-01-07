import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/add.js',
                'resources/css/home.css',
            ],
            refresh: true,
        }),
    ],
});
