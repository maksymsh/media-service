import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/scss/app.scss',
                'resources/js/admin/admin.js',
                'resources/scss/admin/admin.scss',
            ],
            ssr: ['resources/js/ssr.js'],
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
        alias: [
            // Alias to node modules assets
            { find: /^~(.*)/, replacement: '$1' },
        ],
    },
    ssr: {
        noExternal: ['vue', '@protonemedia/laravel-splade'],
    },
})
