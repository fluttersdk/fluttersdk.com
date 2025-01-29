import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: '#e6f1f9',
                    100: '#cce3f3',
                    200: '#b3d6ed',
                    300: '#80bae1',
                    400: '#3491ce',
                    500: '#0175C2',
                    600: '#0169af',
                    700: '#015e9b',
                    800: '#014674',
                    900: '#002f4e',
                },
            }
        },
    },
    plugins: [],
};
