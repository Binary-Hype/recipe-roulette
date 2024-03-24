/** @type {import('tailwindcss').Config} */

export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './content/**/*.md'

    ],
    theme: {
        fontFamily: {
            sans: ['Gabarito', 'system-ui'],
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

