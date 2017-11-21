const path = require('path');


module.exports = {
    entry: ['babel-polyfill', './main.js'],
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js'
    },
    module: {
        rules: [{
            test: /\.scss$/,
            use: [{
                loader: "style-loader" // creates style nodes from JS strings
            }, {
                loader: "css-loader" // translates CSS into CommonJS
            }, {
                loader: "sass-loader" // compiles Sass to CSS
            }]
        },
        { test: /\.js$/, exclude: /node_modules/, loader: "babel-loader" }
        ]
    }
}