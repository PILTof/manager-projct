<<<<<<< Updated upstream
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue'
=======
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
            vue: 'vue/dist/vue.esm-bundler.js'
        }
    }
=======
            vue: "vue/dist/vue.esm-bundler.js",
        },
    },
    server: {
        cors: {
            origin: /^https?:\/\/(?:(?:[^:]+\.)?localhost|manager\.local|127\.0\.0\.1|\[::1\])(?::\d+)?$/,
        },
    },
>>>>>>> Stashed changes
});
