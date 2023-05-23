import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';


/** @type {import('tailwindcss').Config} */
export default {
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
                jolly: ['Jolly Lodger', 'cursive'],
                Potta: ['Potta One', 'cursive'],

            },

        },
            colors: {
                'hoverpri': '#292929',
                'white': '#ffffff',
                'black': '000000',
                'hoversec': '#A6A6A6',
                'colorter':'#87888A',
                'colorpru': '#b91c1c',
            }


    },



    plugins: [forms, typography],
};
