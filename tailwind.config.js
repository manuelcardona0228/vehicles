const { gray } = require('tailwindcss/colors')
const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    colors:{

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
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
