const { gray } = require('tailwindcss/colors')
const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],
    darkMode: 'media', // or 'media' or 'class'
    theme: {
        colors:{
            'my-purple-100': '#2B0548',
            'my-purple-200': '#2D1048',
            'my-blue-100': '#4630AB',
            'my-blue-200': '#6669C5',
            'my-white-100': '#F1FAEE',
            white: '#fff',
            black: '000',
            fuchsia: colors.fuchsia,
            gray: colors.coolGray,
            red: colors.red,
            yellow: colors.yellow,
            green: colors.green,
            blue: colors.blue,
            indigo: colors.indigo,
            purple: colors.purple,
            pink: colors.pink,
            bluegray: colors.blueGray,
            coolgray: colors.coolGray,
            truegray: colors.trueGray,
            warngray: colors.warngray,
            orange: colors.orange,
            amber: colors.amber,
            lime: colors.lime,
            emerald: colors.emerald,
            teal: colors.teal,
            cyan: colors.cyan,
            lightblue: colors.lightBlue,
            violet: colors.violet,
            rose: colors.rose,
        },
        container: {
            center: true,
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
