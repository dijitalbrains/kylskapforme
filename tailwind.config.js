const colors = require("tailwindcss/colors");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            backgroundImage: (theme) => ({
                header: "url('/images/bg-header.png')",
                footer: "url('/images/bg-footer.png')",
                section: "url('/images/bg-section.png')",
            }),
            colors: {
                lime: {
                    350: "#C0F248",
                },
                trueGray: {
                    250: "#E6E6E6",
                },
                coolGray: {
                    350: "#9A9A9A",
                },
            },
            spacing: {
                inherit: "inherit",
            },
        },
        fontFamily: {
            body: ["Montserrat"],
        },
        colors: {
            transparent: "transparent",
            current: "currentColor",
            black: colors.black,
            white: colors.white,
            lime: colors.lime,
            trueGray: colors.trueGray,
            coolGray: colors.coolGray,
        },
    },
    variants: {
        extend: {
            backgroundColor: ["checked", "hover"],
            borderColor: ["checked"],
            borderWidth: ["hover"],
            opacity: ["disabled"],
        },
    },
    plugins: [
        require("@tailwindcss/forms")({
            strategy: "class",
        }),
    ],
};
