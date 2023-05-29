const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: false, // or 'media' or 'class'
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                '128': '32rem',
                '100': '100px',
                '150': '310px',
              }
        },
    },

    plugins : [require("@tailwindcss/forms"),require("daisyui")],
};

