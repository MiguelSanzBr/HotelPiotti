/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.html',           
    './assets/css/*.css',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('tailwindcss')],
}

