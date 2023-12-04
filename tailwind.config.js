/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: "jit",
  content: ["./build/*.{html,js,php}", "./build/**/*.{html,js,php}"],
  theme: {
    extend: {
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
  plugins: [],
};
