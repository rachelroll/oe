var path = require('path');
// var HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const extractSass = new ExtractTextPlugin({
    filename: "[name].[contenthash].css",
    disable: process.env.NODE_ENV === "development"
});

module.exports = {
    entry: './resources/assets/js/app.js',
    output: {
        filename: 'js/app.js',
        path: path.resolve(__dirname, 'public')
    },

    module: {
        rules: [
            {
                test: require.resolve('jquery'),
                use: [{
                    loader: 'expose-loader',
                    options: '$'
                }]
            },
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    //resolve-url-loader may be chained before sass-loader if necessary
                    use: ['css-loader', 'sass-loader']
                })
            }


        ]
    },
    resolve: {
        //extensions: ['', '.js', '.es6', '.vue'],
        alias: {
            //  也可以不写
            jquery: './jquery-3.2.1.min.js',
            materialize: './materialize.min.js'
        }
    },
    plugins: [
        new ExtractTextPlugin('css/app.css')
        // new HtmlWebpackPlugin({
        //     title: 'My App',
        //     template: 'resources/views/layouts/master.blade.php',
        //     filename: 'resources/views/layouts/admin.html'
        // })

        //if you want to pass in options, you can do so:
        //new ExtractTextPlugin({
        //  filename: 'style.css'
        //})
    ]

};

