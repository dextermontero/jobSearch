import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/**/**/*.blade.php',
        './resources/views/**/**/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
        "./resources/css/*.css",
        "./resources/js/*.{js,ts}",
        "./public/assets/css/*.css",
        "./public/assets/js/*.{js,ts,map}",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'poppins': ['Poppins', 'sans-serif'],
            },
        },
    },

    plugins: [forms, require('flowbite/plugin'), require('tailwind-scrollbar')],
};
