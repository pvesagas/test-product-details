/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './storage/framework/views/*.php',
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  theme: {
    colors: {
        'border-dark-gray': '#222222',
        'border-light-gray': '#CCCCCC',
        'font-color-222': '#222222',
        'font-color-888': '#888888',
        'star-color': '#C90000',
        'header-bg-color': '#F6F6F7'
    },
    extend: {},
  },
  plugins: [],
}
