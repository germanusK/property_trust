import { Datepicker, Input, Sidenav, Ripple, initTE } from "tw-elements";
initTE({ Datepicker, Input, Sidenav, Ripple});
require('./bootstrap');

tailwind.config = {
    darkMode: "class",
    theme: {
    fontFamily: {
        sans: ["Roboto", "sans-serif"],
        body: ["Roboto", "sans-serif"],
        mono: ["ui-monospace", "monospace"],
    },
    },
    corePlugins: {
    preflight: false,
    },
};
