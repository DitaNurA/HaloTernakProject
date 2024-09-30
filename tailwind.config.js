/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./app/Views/**/*.php'

  ],
  theme: {
    extend: {
      colors: {
        primary: '#2192FF',
        primaryGreen: '#5BA534',
        success: '#38E54D',
        light: '#FFFFFF',
        dark: '#000',
        secondary: '#E2E2E2',
        overview: '#8B4513'
      }
    },
    screens: {
      xs: '480px',
      ss: '620px',
      sm: '768px',
      md: '1060px',
      lg: '1200px',
      xl: '1700px',
    },
  },
  plugins: [],
}

