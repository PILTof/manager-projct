import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import { quasar, transformAssetUrls } from '@quasar/vite-plugin'
import { fileURLToPath } from 'node:url'
import collect from "collect.js";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/admin/posts/rich_text.js",
                "resources/css/plugins/jodit.min.css",
                "resources/css/styles/main.css"
            ],
            refresh: true,
        }),
        vue(),
        quasar({
            sassVariables: fileURLToPath(
                new URL("./resources/css/quasar-variables.sass", import.meta.url)
            ),
        }),
    ],
    resolve: {
        alias: {
            vue: "vue/dist/vue.esm-bundler.js",
        },
    },
    server: {
        cors: {
            origin: /^https?:\/\/(?:(?:[^:]+\.)?localhost|manager\.local|127\.0\.0\.1|\[::1\])(?::\d+)?$/,
        },
    },
});
