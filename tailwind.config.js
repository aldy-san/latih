module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        orange: "#FC8047",
        darkblue: "#163F5B",
        lightblue: "#D7EFF4"
      }
    },
  },
  variants: {
    extend: {
      display: ['hover', 'focus', 'group-hover', 'group-focus'],
    },
  },
  plugins: [],
}
