import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/css/signInSignUp.css',
                'resources/css/navbar.css',
                'resources/css/home.css',
                'resources/css/contactUs.css',
                'resources/css/profile.css',
                'resources/css/editProfile.css',
                'resources/css/symptomsDescription.css',
                'resources/css/symptomsQuestionnaires.css',
                'resources/css/about.css',
                'resources/css/prescription.css',
            ],
            refresh: true,
        }),
    ],
});
