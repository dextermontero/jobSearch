import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/assets/css/quill.snow.css',
                'public/assets/css/toastr.css',
                'public/assets/css/select2.min.css',
                'public/assets/js/jquery.min.js',
                'public/assets/js/quill.min.js',
                'public/assets/js/toastr.js',
                'public/assets/js/select2.full.min.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~fontawesome': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free'),
            '$': 'jQuery',
        }
    },
});
