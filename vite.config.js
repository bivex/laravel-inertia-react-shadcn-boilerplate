import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: "resources/js/app.jsx",
            refresh: true,
        }),
        react(),
    ],
    define: {
        global: "window",
    },
    build: {
        // Enable source maps for debugging (disable in production for better performance)
        sourcemap: true,
        // Generate chunks for better caching
        rollupOptions: {
            output: {
                manualChunks: {
                    // Vendor chunks for better caching
                    'react-vendor': ['react', 'react-dom'],
                    'inertia-vendor': ['@inertiajs/react'],
                    'ui-vendor': [
                        '@radix-ui/react-dialog',
                        '@radix-ui/react-dropdown-menu',
                        '@radix-ui/react-select',
                        '@radix-ui/react-tabs',
                        '@radix-ui/react-toast',
                    ],
                    // Separate large editor libraries
                    'editor-vendor': [
                        '@tiptap/react',
                        '@tiptap/starter-kit',
                        '@tiptap/extension-table',
                        'react-draft-wysiwyg',
                    ],
                },
                // Chunk file naming
                chunkFileNames: 'assets/js/[name]-[hash].js',
                entryFileNames: 'assets/js/[name]-[hash].js',
                assetFileNames: 'assets/[ext]/[name]-[hash].[ext]',
            },
        },
        // Chunk size warning limit (increase for now)
        chunkSizeWarningLimit: 1000,
        // CSS code splitting
        cssCodeSplit: true,
    },
    // Optimize dependencies
    optimizeDeps: {
        include: [
            'react',
            'react-dom',
            '@inertiajs/react',
        ],
    },
    // Server configuration for development
    server: {
        hmr: {
            overlay: true,
        },
    },
});
