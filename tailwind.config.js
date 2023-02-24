const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                inter: ['Inter'],
            },
            spacing: {
                13: '3.25rem',
            },
              colors: {
                ralzy: '#bada55',
                kopi: '#c0ffee',
            },
              animation: {
                'spin-slow': "spin 3s linear infinite",
                'goyang': "goyang 1s ease-in-out infinite",
            },
              keyframes: {
                goyang: {
                  '0%, 100%' : { transform: 'rotate (-3deg)'},
                  '50%': {transform: 'rotate(3deg)'},
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require("daisyui")]
};

