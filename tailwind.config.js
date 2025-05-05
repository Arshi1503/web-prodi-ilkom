/** @type {import('tailwindcss').Config} */
export default {
  prefix: 'tw-',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#f96f4a',
        'secondary': '#fa8b6e',
        'third': '#fa9a80',
      },
    },
  },
  plugins: [],
}

