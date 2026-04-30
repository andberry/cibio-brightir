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
      pink: "#CD009D",
      blue: "#04065A",
      lightblue: "#3A64F5",
      primary: "#007A9E",
      secondary: "#00B0C6",
    },
    fontFamily: {
      kanit: ["Kanit", "sans-serif"],
      lato: ["Lato", "sans-serif"],
      opensans: ["Open Sans", "sans-serif"],
      worksans: ["Work Sans", "sans-serif"],
      inter: ["Inter", "sans-serif"],
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
