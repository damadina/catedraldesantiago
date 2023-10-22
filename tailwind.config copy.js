const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {

    pruge: ["./public/*.html"],

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
              },
          },
        extend: {
            screens: {
                '3xl': '1600px',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            height: {
                '128': '32rem',
            },
            colors: {
                'catedral': '#941431',
                'catedralfin': '#C91C45',
                'catedralbar': "#ec9372"
            },
            backgroundColor: {
                'catedral': '#941431',
            },



            height: theme => ({
                "screen/2": "50vh",
                "screen/3": "70vh",
                "screen/4": "calc(100vh / 4)",
                "screen/5": "calc(100vh / 5)",
                '3/5': '60%',
              }),
              maxWidth: {
                '1/2': '50%',
              },
              minWidth: {
                '3/5': '70%',
                '2/5': '30%',
              }

        },

    },

    variants: {
        display: ['responsive', 'hover', 'focus']
     },
    plugins: [require('@tailwindcss/forms'),
            require ( 'tailwind-scrollbar' ) ( {  nocompatible : true  } ),
            require('@tailwindcss/line-clamp'),
        ],
    variants: {
        scrollbar: ['rounded']
    }

};
