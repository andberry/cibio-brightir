const colors = require("tailwindcss/colors");

module.exports = {
  content: ["./site/twigTemplates/**/*.twig"],
  theme: {
    colors: {
      white: "#FEFDFD",
      black0: "#000000",
      black: "#222222",
      graylight: "#EFEFEF",
      gray: "#333",
      primary: "#337D9E", // teal
      secondary: "#FAE64D", // yellow
    },
    fontFamily: {
      figtree: ["Figtree", "sans-serif"],
      outfit: ["Outfit", "sans-serif"],
      inter: ["Inter", "sans-serif"],
      ibm: ["IBM Plex Serif", "serif"]
    },
    extend: {
      boxShadow: {
        popup: "0 10px 10px rgb(0 0 0 / 0.5)",
      },
      borderWidth: {
        3: "3px",
      },
    },
  },
  variants: {},
  plugins: [require("@tailwindcss/typography")],
};
