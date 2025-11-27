module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
        bungee: ['"Bungee Inline"', 'cursive'],
      }
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
