import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            'resources/css/app.css',
            'resources/js/app.js',
            'resources/js/navbar.js',
            'resources/js/home.js',
        
            'resources/css/navbar.css',
            'resources/css/footer.css',  
            'resources/css/privacy-policy.css', 
            'resources/css/cookie-policy.css',
            'resources/css/careers.css',        
            'resources/css/product-results.css',
            'resources/css/industrii.css',
        ],
            refresh: true,
        }),
    ],
});
