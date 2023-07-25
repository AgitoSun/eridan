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
                'resources/css/admin/select2.css',
                'resources/css/admin/boxicons.css',
                'resources/css/admin/core.css',
                'resources/css/admin/theme-default.css',
                'resources/css/admin/perfect-scrollbar.css',
                'resources/css/admin/demo.css',
                'resources/js/admin/helpers.js',
                'resources/js/admin/config.js',
                'resources/js/admin/jquery.js',
                'resources/js/admin/popper.js',
                'resources/js/admin/bootstrap.js',
                'resources/js/admin/perfect-scrollbar.js',
                'resources/js/admin/menu.js',
                'resources/js/admin/main.js',
                'resources/js/admin/select2.js',
                'resources/js/admin/autosize.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
