const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                // Brand Colors
                'brand': {
                    DEFAULT: '#FF6D0B',  // Primary Orange
                    'light': '#FFA870',  // Secondary Orange
                },
                // Base Colors
                'base': {
                    'white': '#FFFFFF',
                    'offwhite': '#F8F9FA',
                },
                // Text Colors
                'text': {
                    'primary': '#1E1B1B',    // Dark Gray
                    'secondary': '#666666',   // Medium Gray
                    'tertiary': '#999999',    // Light Gray
                },
                // Accent Colors
                'accent': {
                    'blue': '#007BFF',
                    'green': '#28A745',
                    'red': '#DC3545',
                },
            },
            fontFamily: {
                primary: ['"Plus Jakarta Sans"', ...defaultTheme.fontFamily.sans],
                secondary: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'hero': ['3rem', { lineHeight: '1.2', letterSpacing: '-0.02em' }],
                'section': ['2.25rem', { lineHeight: '1.3' }],
                'subsection': ['1.5rem', { lineHeight: '1.4' }],
                'body': ['1rem', { lineHeight: '1.6' }],
                'small': ['0.875rem', { lineHeight: '1.5' }],
                'micro': ['0.75rem', { lineHeight: '1.5' }],
            },
            fontWeight: {
                light: 300,
                regular: 400,
                medium: 500,
                semibold: 600,
                bold: 700,
                extrabold: 800,
            },
            backgroundImage: {
                'brand-gradient': 'linear-gradient(to right, #FF6D0B, #FFA870)',
            },
            screens: {
                'xs': '480px',
                'sm': '576px',
                'md': '768px',
                'lg': '992px',
                'xl': '1200px',
                '2xl': '1400px',
            },
        },
    },
    plugins: [require('@tailwindcss/forms')],
};
