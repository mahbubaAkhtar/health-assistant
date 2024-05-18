import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/navbar.css',
                'resources/css/home.css',
                'resources/css/contactUs.css',
                'resources/css/profile.css',
                'resources/css/editProfile.css',
                'resources/css/symptomsDescription.css',
                'resources/css/symptomsQuestionnaires.css',
                'resources/css/about.css',
            ],
            refresh: true,
        }),
    ],
});
