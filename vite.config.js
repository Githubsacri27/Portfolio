import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [], // Elimina 'resources/js/app.js' si no existe
            refresh: true,
        }),
    ],
});
