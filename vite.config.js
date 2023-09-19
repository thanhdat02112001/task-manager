import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/myday.js',
                'resources/js/task_detail.js'
            ],
            refresh: true,
        }),
    ],
});
