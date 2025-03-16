import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue()
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
