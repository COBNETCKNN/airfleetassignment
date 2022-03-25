module.exports = {
    content: require('fast-glob').sync([
        './**/*.php'
    ]),
    theme: {
        extend: {
            fontFamily: {
            'roboto': ['Roboto Condensed']
        },
            fontSize: {
                desktopTitle: ['40px', { lineHeight: '46.88px'}],
                desktopContent: ['16px', { lineHeight: '18.75px'}],
                mobileTitle: ['33px', { lineHeight: '38.67px'}],
                mobileContent: ['18px', { lineHeight: '21.09px'}],
            },
        },
    },
    plugins: [],
}