// vite.config.js
import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        main: './public/index.html', // Ruta al archivo index.html
      },
    },
  },
});