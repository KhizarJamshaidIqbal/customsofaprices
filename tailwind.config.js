/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './data/**/*.php',
    './embed/**/*.{php,html}',
    './inc/**/*.php'
  ],
  theme: {
    extend: {
      fontFamily: {
        'display': ['"Playfair Display"', 'Georgia', 'serif'],
        'body': ['"Inter"', 'system-ui', 'sans-serif'],
      },
      colors: {
        brand: {
          50: '#fdf8f0',
          100: '#f9eed9',
          200: '#f2dbb2',
          300: '#e8c17f',
          400: '#dea54e',
          500: '#d4902e',
          600: '#c07623',
          700: '#9f5b1f',
          800: '#814a20',
          900: '#6a3e1e',
        },
        gold: {
          DEFAULT: '#C9A96E',
          light: '#DFC9A0',
          dark: '#A68942',
        },
        charcoal: {
          DEFAULT: '#2D2D2D',
          light: '#4A4A4A',
          dark: '#1A1A1A',
        },
        cream: {
          DEFAULT: '#FAFAF6',
          dark: '#F0EDE5',
        }
      },
    },
  },
  plugins: [],
}
