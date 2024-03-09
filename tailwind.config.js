/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                clifford: "#da373d",
                lightb: "#B8DBD9",
                spring: "#04724D",
                back: "#FDF5E6",
                orchid: "#EFB9CB",
            },
        },
    },
    plugins: [],
}

