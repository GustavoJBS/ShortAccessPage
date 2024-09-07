import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require("./vendor/wireui/wireui/tailwind.config.js")
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./vendor/wireui/wireui/src/*.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/WireUi/**/*.php",
        "./vendor/wireui/wireui/src/Components/**/*.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                fugaz: ['Fugaz One', ...defaultTheme.fontFamily.sans],
                sans: [
                    'Figtree',
                    ...defaultTheme.fontFamily.sans
                ],
            },
            colors: {
                neutral: {
                    0: '#fffdff',
                    50: '#fff8f7',
                    100: '#ffedeb',
                    200: '#f4dddb',
                    300: '#d8c1c0',
                    350: '#bba6a5',
                    400: '#a08c8b',
                    450: '#857372',
                    500: '#6b5a59',
                    600: '#5f4f4d',
                    650: '#534342',
                    700: '#473837',
                    750: '#3b2d2c',
                    800: '#251918',
                    900: '#000000'
                },
            }
        },
    },

    plugins: [forms],
};
