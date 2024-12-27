import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',  // If you have a main JS file
                'resources/css/style.css', 
                'resources/css/responsive.css',
                'resources/css/bootstrap.css',
                'resources/css/font-awesome.min.css'
            ],
            refresh: true,
        }),
    ],
});
