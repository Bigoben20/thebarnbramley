/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#ffce45',
        secondary: '#c65643',
        primaryBg: '#2b2b2b',
        primaryDark: '#1d1d1d',
        primaryLight: '#ffffff'
      }
    }
  },
  plugins: [],
}