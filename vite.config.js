import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/guest/theme.css',
                'resources/css/guest/theme-elements.css',
                'resources/css/guest/theme-blog.css',
                'resources/css/guest/theme-shop.css',
                'resources/css/guest/demo-law-firm.css',
                'resources/css/guest/skins/skin-law-firm.css',
                'resources/css/guest/custom.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
