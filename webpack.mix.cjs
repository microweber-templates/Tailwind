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
    .css('resources/assets/css/theme.css', 'resources/assets/dist/build')

  .css('../Big2/resources/assets/templates_features/css/scss/styles-for-template.css', 'resources/assets/dist/build')
    .css('../Big2/resources/assets/design-styles/design-styles.css', 'resources/assets/dist/build')
    .sass('../Big2/resources/assets/css/main.scss', 'resources/assets/dist/build')


mix.after(() => {
    fs.copySync(
        path.resolve(__dirname, 'resources/assets'),
        path.resolve(__dirname, '../../public/templates/tailwind')
    );
});


