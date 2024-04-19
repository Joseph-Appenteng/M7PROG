import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';


/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/homepage/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/projects/*.blade.php',
        './storage/framework/views/*.php',
        './storage/framework/views/homepage/*.php',
        './storage/framework/views/projects/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/homepage/**/*.blade.php',
        './resources/views/projects/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
