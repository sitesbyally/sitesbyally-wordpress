import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  root: 'assets', // your source files
  base: '',       // relative paths for WordPress
  build: {
    outDir: '../dist', // compiled files go here
    emptyOutDir: true,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'assets/js/custom.js'),
        style: path.resolve(__dirname, 'assets/scss/main.scss'),
      },
      output: {
        entryFileNames: '[name].js',
        chunkFileNames: '[name].js',
        assetFileNames: '[name].[ext]',
      },
    },
  },
});
