/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: "jit",
  content: ["./build/*.{html,js,php}", "./build/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        white: '#ffffff',
      },
      screens: {
        "4k": "3840px",
        "1080p": "1920px",
        "2k": "2500px",
      },
      backgroundImage: {
        "fade-right": "linear-gradient(to right, #000, transparent)",
        "fade-left": "linear-gradient(to left, #000, transparent)",
      },
      width: {
        "95vw": "95vw",
      },
      boxShadow: {
        upward:
          "0em -0.25em 0.375em -0.0625em rgba(0, 0, 0, 0.1), 0em -0.125em 0.25em -0.0625em rgba(0, 0, 0, 0.06)",
      },
      borderRadius: {
        custom: "40px 0 0 40px",
      },
      borderWidth: { right: "0" },
    },
  },
  variants: {
    extend: {
      stroke: ['hover'], // Now can use hover:stroke-'colors setup in tailwind.config.js'
    },
  },
  plugins: [
    function ({ addBase }) {
      addBase({
        ".side-nav-container::-webkit-scrollbar": { display: "none" },
        ".side-nav-container": {
          "-ms-overflow-style": "none",
          scrollbarWidth: "none",
          ".side-nav-overlay-container::-webkit-scrollbar": { display: "none" },
          ".side-nav-overlay-container": {
            "-ms-overflow-style": "none",
            scrollbarWidth: "none",
          },
        },
      });
    },
  ],
};
