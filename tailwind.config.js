const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center : true,
            padding : '12px',
        },
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary' : '#6d28d9',
                'secondary' : '#334155',
                'third' : '#64748b',
                'fourth' : '#7c3aed'
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
