const colors = require("tailwindcss/colors")

module.exports = {
    mode: "jit",
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                gray: colors.warmGray,
                orange: colors.orange,
                amber: colors.amber,
                lime: colors.lime,
                emerald: colors.emerald,
                teal: colors.teal,
                cyan: colors.cyan,
                sky: colors.sky,
                violet: colors.violet,
                fuchsia: colors.fuchsia,
                rose: colors.rose,
            },
        },
    },
    variants: {
        extend: {
            opacity: ["disabled"],
            backgroundColor: ["disabled"],
        },
    },
    plugins: [],
}
