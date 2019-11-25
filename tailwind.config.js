const defaultTheme = require('tailwindcss/defaultTheme')


module.exports = {
  theme: {
    // Some useful comment
    extend: {
      colors: {
        'brand': '#3b7977',
        'brand-alt': '#57a99a',
        'brand-ondark': '#6ccec6',
        'brand-white': '#ecf4f3'
      },
      height: {
        '128': '20rem',
        'half': '50vh',
        '3/4': '75vh'
      },
    },


    customForms: theme => ({
      default: {
        'input, textarea, multiselect, select': {
          borderRadius: theme('borderRadius.lg'),
          paddingTop: theme('spacing.3'),
          paddingBottom: theme('spacing.3'),
          boxShadow: theme('boxShadow.none'),
          backgroundColor: theme('colors.gray.700'),
          backgroundColor: theme('colors.white'),
          '&:focus, &:hover': {
            backgroundColor: theme('colors.white'),
            boxShadow: theme('boxShadow.default'),
          }
        },


      },
    })


  },
  variants: {
    // Some useful comment
      backgroundColor: ['responsive', 'hover', 'focus', 'group-hover'],
      borderColor: ['responsive', 'hover', 'focus', 'group-hover'],
  },
  plugins: [
    // Some useful comment
    require('@tailwindcss/custom-forms'),
  ]
}
