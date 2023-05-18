import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'
import { defineConfig } from 'vite'

export default defineConfig({
    plugins: [
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false
                }
            }
        }),
        laravel({
            input: [
                '@js/app.js',
                '@js/modules/admin/main.js',
                '@js/modules/photo/main.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@js': '/resources/js/',
            '@css': '/resources/css/'
        }
    },
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: '@import "@css/variables.scss";'
            }
        }
    }
})
