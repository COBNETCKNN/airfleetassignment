module.exports = {
    content: require('fast-glob').sync([
        './**/*.php'
    ]),
    theme: {
        extend: {
          fontFamily: {
          'roboto': ['Roboto Condensed']
      },
        },
    },
    plugins: [],
}