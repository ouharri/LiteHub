const defaultTheme = require('tailwindcss/defaultTheme');
/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "*.{blade,php,html,js}",
        "./resources/views/*",
        "./resources/views/layout/*",
        "./resources/views/Components/nav/*",
    ],

    theme: {
        screens:{
            'xs': '350px',
            ...defaultTheme.screens,
        },
        extend: {
            colors: {

            },
            fontFamily: {
                'montserrat': ['Montserrat','sans-serif'],
                'poppins': ['Poppins','sans-serif'],

            },
            fontSize: {
                'xxs': '.65rem'
            },

        }
    },
    plugins: [
        require('tailwindcss-dark-mode')(),
        require('flowbite/plugin'),
        require('preline/plugin'),
        require('@tailwindcss/forms')
    ],
};
