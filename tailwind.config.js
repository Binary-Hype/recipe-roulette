/** @type {import('tailwindcss').Config} */

export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './content/**/*.md'

    ],
    theme: {
        fontFamily: {
            sans: ['Gabarito', 'sans-serif'],
            serif: ['Kalam', 'serif'],
        },
        extend: {},
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                "forest": {
                    ...require("daisyui/src/theming/themes")["fantasy"],
                    primary: "#1FCC79"
                }
            }
        ],
    },
}

