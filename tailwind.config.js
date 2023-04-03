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
					light: "#f4f4ed",
					dark: "#110111"
				},
				gummyDolphins: {
					50: "#f2cff3",
					100: "#deb2f2",
					200: "#8a7aef",
					300: "#497ae8",
					400: "#219adc",
					500: "#06adc9",
					600: "#00a0ae",
					700: "#00778d",
					800: "#004466",
					900: "#00183d",
				},
				cadmiumViolet: {
					50: "#ebd6d9",
					100: "#e3c0cc",
					200: "#d198bd",
					300: "#bf74ba",
					400: "#9c55ab",
					500: "#773c95",
					600: "#58287d",
					700: "#401864",
					800: "#2d0d49",
					900: "#1d052d",
				},
				luckyGrey: {
					50: "#ececec",
					100: "#e5e5e5",
					200: "#d5d5d5",
					300: "#c4c4c4",
					400: "#b1b1b1",
					500: "#9c9b9b",
					600: "#847376",
					700: "#694b53",
					800: "#4d2736",
					900: "#2f0e20",
				},
				grassGreen: {
					50: "#dbedcc",
					100: "#c4e5ad",
					200: "#92d674",
					300: "#67c646",
					400: "#4bb323",
					500: "#429e0d",
					600: "#498602",
					700: "#556b00",
					800: "#4e4600",
					900: "#301a01",
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
