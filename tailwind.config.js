const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: {
                    50: "#E8E8E8",
                    100: "#D4D4D4",
                    200: "#A6A6A6",
                    300: "#7A7A7A",
                    400: "#4F4F4F",
                    500: "#222222",
                    600: "#1C1C1C",
                    700: "#141414",
                    800: "#0D0D0D",
                    900: "#080808",
                    950: "#030303",
                },
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
