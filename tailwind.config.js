const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    '50': '#f4f6f7',
                    '100': '#ecf4f1',
                    '200': '#d5eae0',
                    '300': '#b1dfbb',
                    '400': '#6dc98f',
                    '500': '#44a96a',
                    '600': '#328a4c',
                    '700': '#2a713e',
                    '800': '#225432',
                    '900': '#21412c',
                },
                secondary: {
                    '50': '#f7f8f8',
                    '100': '#f2f6f2',
                    '200': '#e5e8e0',
                    '300': '#d1d8c2',
                    '400': '#a7ba97',
                    '500': '#829472',
                    '600': '#5f704e',
                    '700': '#4b5941',
                    '800': '#394335',
                    '900': '#2f342d',
                }
            },
        },
    },
    variants: {},
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/custom-forms'),
        require('@tailwindcss/ui'),
    ],
};
