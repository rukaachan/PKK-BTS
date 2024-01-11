module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1536px",
          },
          colors: {
            darkRed: "#A00000",
            yellow:{
                250:"#FFFF00",
            },
          },
    },
    plugins: [require("flowbite/plugin")],
};
