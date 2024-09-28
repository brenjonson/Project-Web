import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/getLocation.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '10.153.58.109', // ให้รองรับการเข้าถึงจากทุก IP
        port: 5173, // หรือพอร์ตที่คุณต้องการ
    },
});
