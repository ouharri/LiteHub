const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    darkMode: 'class', //false, class, media
    content: [
        "*.{html,js}",
        "./resources/views/test.blade.php",
        "./resources/views/layout/template.blade.php",
        // "./resources/js/app.js",
        // "./resources/css/app.css"
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
    plugins: [],
}
