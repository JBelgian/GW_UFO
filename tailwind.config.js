/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        green: {
          light: '#D8F3DC',
          middle: '#B7E4C7',
          dark: '#1B4332',
        },
      },
    },
  },
  plugins: [],
};


