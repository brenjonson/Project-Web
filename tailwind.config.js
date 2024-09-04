/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily: {
          kanit: "'Kanit','serif'",
          Lato:"'Lato','serif'"
        },
        spacing:{
          '22px':'22px'
        }
      },
    },
    plugins: [],
  }