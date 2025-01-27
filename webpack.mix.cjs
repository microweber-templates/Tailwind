let mix = require('laravel-mix');
let autoprefixer = require('autoprefixer');
let path = require('path');
let fs = require('fs-extra');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const webpack = require('webpack');
mix.webpackConfig({
    plugins: [
        new webpack.optimize.LimitChunkCountPlugin({
            maxChunks:1,
        }),
    ],
    stats: {
        children: true
    }
});
//
mix
    .js('resources/assets/js/theme.js', 'resources/assets/dist/build')
    .css('resources/assets/css/theme.css', 'resources/assets/dist/build');

mix.after(() => {
    fs.copySync(
        path.resolve(__dirname, 'resources/assets'),
        path.resolve(__dirname, '../../public/templates/tailwind')
    );
});


