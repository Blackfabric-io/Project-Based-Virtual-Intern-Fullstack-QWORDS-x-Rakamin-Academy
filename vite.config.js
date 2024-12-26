import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // Add server configuration for better development experience
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    // Optimize build configuration
    build: {
        // Reduce chunk size warnings threshold
        chunkSizeWarningLimit: 1000,
    },
});
