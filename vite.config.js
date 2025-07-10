import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// // Importing Tailwind CSS plugin
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
