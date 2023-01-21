import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({

    resolve: {
        alias: {
            '@': path.resolve(__dirname, './resources/js'),
            '@style': path.resolve(__dirname, './resources/scss'),
            '@fonts': path.resolve(__dirname, './resources/fonts'),
            '@images': path.resolve(__dirname, './resources/images'),
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});