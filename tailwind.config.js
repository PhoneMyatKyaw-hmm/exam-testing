/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                transparent: "transparent",
                current: "currentColor",
                cnf: {
                    100: "#EDF5E1",
                    200: "#8EE4AF",
                    300: "#5CDB95",
                    400: "#379683",
                    500: "#05386B",
                },
                wbc: {
                    50: "#1041ED",
                    100: "#106EEA",
                    200: "#3B8AF2",
                    300: "#EA8C10",
                },
            },
        },
    },
    plugins: [],
};
