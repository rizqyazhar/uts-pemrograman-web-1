/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./app/Views/**/*.php", "./public/**/*.html", "./public/**/*.js"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      keyframes: {
        "slide-in-right": {
          "0%": { transform: "translateX(100%)", opacity: "0" },
          "100%": { transform: "translateX(0)", opacity: "1" },
        },
      },
      animation: {
        "spin-slow": "spin 3s linear infinite",
        "slide-in-right": "slide-in-right 1s ease-out forwards",
      },
    },
  },
  plugins: [],
};
