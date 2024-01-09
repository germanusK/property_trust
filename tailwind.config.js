// require('tw-elements');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/**/*.blade.php',
        './resources/views/**/*.blade.php',
        './resources/views/*.blade.php',
        './node_modules/tw-elements/dist/css/*.css',
        "./node_modules/tw-elements/dist/js/*.js",
        "./node_modules/tw-elements/dist/**/*.js",
        "./node_modules/tw-elements/dist/**/*.css",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                sans: ["Roboto", "sans-serif", 'Nunito', ...defaultTheme.fontFamily.sans],
                body: ["Roboto", "sans-serif"],
                mono: ["ui-monospace", "monospace"],
            },
        },
    },
    plugins: [require('@tailwindcss/forms'), require('tw-elements/dist/plugin.cjs')],
    corePlugins: {
        preflight: false,
    },
};
