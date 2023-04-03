const defaults = require('tailwindcss/defaultTheme');

module.exports = {
    content: require('fast-glob').sync([
        'source/**/*.html',
        'source/**/*.md',
        'source/**/*.js',
        'source/**/*.php',
        'source/**/*.vue',
    ]),
    options: {
        safelist: [/language/, /hljs/, /mce/],
    },
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Nunito Sans"', ...defaults.fontFamily.sans],
            },
            lineHeight: {
                normal: '1.6',
                loose: '1.75',
            },
            maxWidth: {
                '8xl': '88rem',
            },
            boxShadow: {
                search: '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
            },
            colors: {
				theme: {
					light: "#37ca9c",
					dark: "#af58e3"
				},
				reboot: {
					50: "#f3d0f1",
					100: "#e6baf4",
					200: "#a78ff3",
					300: "#6682ee",
					400: "#439be4",
					500: "#29aad1",
					600: "#199fb5",
					700: "#107b91",
					800: "#0b4b68",
					900: "#071f3a",
				},
				magentaAffair: {
					50: "#f3d4d7",
					100: "#f3c1ce",
					200: "#f29dcd",
					300: "#ed79db",
					400: "#d659e2",
					500: "#a83ecf",
					600: "#7d2ab3",
					700: "#591c90",
					800: "#3c1166",
					900: "#210939",
				},
				dolphinGrey: {
					50: "#ebe9e5",
					100: "#e3e3e3",
					200: "#d4d4d4",
					300: "#c3c3c3",
					400: "#b0b0b0",
					500: "#9a9898",
					600: "#817274",
					700: "#664b54",
					800: "#482838",
					900: "#2a0f21",
				},
				verdantFields: {
					50: "#e0f3d4",
					100: "#d1f3c1",
					200: "#adf29d",
					300: "#89ed79",
					400: "#6ee259",
					500: "#64cf3e",
					600: "#6ab32a",
					700: "#74901c",
					800: "#665c11",
					900: "#391e09",
				},
			},
        },
        fontSize: {
            xs: '.8rem',
            sm: '.925rem',
            base: '1rem',
            lg: '1.125rem',
            xl: '1.25rem',
            '2xl': '1.5rem',
            '3xl': '1.75rem',
            '4xl': '2.125rem',
            '5xl': '2.625rem',
            '6xl': '10rem',
        },
    },
};
