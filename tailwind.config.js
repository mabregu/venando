const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                gotham: ['Gotham-Book'],
                gothambook: ['Gotham'],
                raleway: ['Raleway', defaultTheme.fontFamily],
            },
            fontSize: {
                '4.5xl': '2.5rem'
            },
            inset: {
                '-30': '-30rem',
                '-33': '-33rem',
                '-140': '-40rem',
                '-19': '-19rem',
            },
        },
        
        screens: {
            'xs': {'min': '400px', 'max': '640px'},
            ...defaultTheme.screens,
          },
          
        height: {
            banner: '75vh',
        },
    },

    variants: {
        extend: {
            opacity: ['active'],
            backgroundOpacity: ['active'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
