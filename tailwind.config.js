const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    darkMode: 'class',
    content: [
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
        require('flowbite/plugin')
    ],
}
