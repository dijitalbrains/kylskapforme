const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
  	'./storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({
          'header': "url('/images/header-bg.png')",
      }),
      colors: {
        lime: {
          350: "#C0F248"
        },
        coolGray: {
          350: "#9A9A9A"
        }
      },
    },
    fontFamily: {
      body: ['Montserrat']
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      lime: colors.lime,
      coolGray: colors.coolGray,
    }
  },
  variants: {
    extend: {
      borderWidth: ['hover'],
    },
  },
  plugins: [],
}
