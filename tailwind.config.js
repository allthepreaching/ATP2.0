/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: "jit",
  content: ["./build/*.{html,js,php}", "./build/**/*.{html,js,php}"],
  theme: {
    extend: {
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
