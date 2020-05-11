const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {},
    purge: false,
    plugins: [
        require('@tailwindcss/custom-forms'),
        require('@tailwindcss/ui'),
    ],
};
