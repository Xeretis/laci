/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'selector',
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

