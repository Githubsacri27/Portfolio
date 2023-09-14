// vite.config.js
import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    rollupOptions: {
      input: 'index.php', // Ruta al archivo PHP principal
    },
  },
});