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
                blue: {
                    50: "#E9EDF6",
                    100: "#D3DBEE",
                    200: "#A7B8DD",
                    300: "#7F97CD",
                    400: "#5374BC",
                    500: "#3B5897",
                    600: "#2F4779",
                    700: "#24365C",
                    800: "#17223B",
                    900: "#0B111D",
                    950: "#06090F",
                },
                green: {
                    50: "#DDFEF9",
                    100: "#BAFCF2",
                    200: "#7AFAE7",
                    300: "#36F7DA",
                    400: "#09E2C1",
                    500: "#069D87",
                    600: "#05806D",
                    700: "#045D50",
                    800: "#024037",
                    900: "#011D19",
                    950: "#010F0D",
                },
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
