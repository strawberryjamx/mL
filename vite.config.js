import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/scss/home.scss', 'resources/scss/about.scss'],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
        outDir: 'public/build',
    },
});
