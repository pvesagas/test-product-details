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
        'dark-gray': '#222222',
        'border-light-gray': '#CCCCCC',
        'color-888': '#888888',
        'star-color': '#C90000',
        'header-bg-color': '#F6F6F7',
        'white': '#FFFFFF'
    },
    extend: {},
  },
  plugins: [],
}
