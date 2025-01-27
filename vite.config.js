import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import {copyFolderSyncVite} from "vite-plugin-copy-folder"
import path from 'path';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    build: {
        rollupOptions: {
            output: {
                entryFileNames: `assets/[name].js`,
                chunkFileNames: `assets/[name].js`,
                assetFileNames: `assets/[name].[ext]`
            }
        },
        outDir: __dirname + '/resources/assets/dist',
        emptyOutDir: true,
        manifest: "manifest.json",
    },
    plugins: [
        tailwindcss(),
        laravel({
            input: [
                __dirname + '/resources/assets/css/theme.css',
                __dirname + '/resources/assets/js/theme.js'
            ],
            refresh: true,
        }),
        copyFolderSyncVite(__dirname+ '/resources/assets/', __dirname+ '/../../public/templates/tailwind/'),
    ],
});
