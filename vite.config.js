import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            '@/api': '/resources/js/api',
            '@/components': '/resources/js/components',
            '@/state': '/resources/js/state',
            '@/root': '/resources/js',
            '@/icons': '/resources/js/components/icons',
            '@/img': '/resources/css/img',
            '@/presets': '/resources/js/presets',
            '@/landing_page': '/storage/app/img/landing_page',
        },
    },
});
