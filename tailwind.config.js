const brandColors = {
  teal: {
    50:  '#EFF7FA',
    100: '#D8ECF3',
    200: '#B0D3E1',
    300: '#7DB5CB',
    400: '#4D97B5',
    500: '#327E9E',
    600: '#255774',
    700: '#1E4159',
    800: '#162E3D',
    900: '#0D1F28',
  },
  yellow: {
    DEFAULT: '#FAE731',
    pale:    '#F4EE96',
    dark:    '#C4B000',
  },
}

module.exports = {
  content: ["./site/twigTemplates/**/*.twig"],
  theme: {
    colors: {
      // base color tokens
      white: "#FFFFFF",
      black0: "#000000",
      teal: brandColors.teal,
      yellow: brandColors.yellow,

      // semantic color tokens
      headings: brandColors.teal[600],
      body: 'brandColors.teal[700]',
    },
    fontFamily: {  
      dmsans: ["'DM Sans'", "sans-serif"],
      outfit: ["Outfit", "sans-serif"]
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
