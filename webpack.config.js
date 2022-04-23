const path = require('path');
const WebpackNotifierPlugin = require('webpack-notifier');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const RemoveEmptyScripts = require('webpack-remove-empty-scripts');
const CssMinimizerWebpackPlugin = require('css-minimizer-webpack-plugin');
const autoprefixer = require('autoprefixer');
const {getIfUtils, removeEmpty} = require('webpack-config-utils');
const { ifProduction } = getIfUtils(process.env.NODE_ENV);

module.exports = {
    mode: ifProduction('production', 'development'),

    /**
     * Add your entry files here
     */
    entry: {
        'css/app':               './source/sass/app.scss'
    },
    
    /**
     * Output settings
     */
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, 'dist'),
        publicPath: '',
    },
    /**
     * Define external dependencies here
     */
    externals: {
    },
    module: {
        rules: [
            /**
             * Styles
             */
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            importLoaders: 3, // 0 => no loaders (default); 1 => postcss-loader; 2 => sass-loader
                        },
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                plugins: [ autoprefixer ],
                            }
                        }
                    },
                    {
                        loader: 'sass-loader',
                        options: {}
                    },
                    'import-glob-loader'
                ],
            },
        ],
    },
    plugins: removeEmpty([
        /**
         * Fix CSS entry chunks generating js file
         */
         new RemoveEmptyScripts(),

        /**
         * Clean dist folder
         */
        //new CleanWebpackPlugin(),
        /**
         * Output CSS files
         */
        new MiniCssExtractPlugin({
            filename: '[name].css'
        }),

        /**
         * Enable build OS notifications (when using watch command)
         */
        new WebpackNotifierPlugin({alwaysNotify: true, skipFirstNotification: true}),

        /**
         * Minimize CSS assets
         */
        ifProduction(new CssMinimizerWebpackPlugin({
            minimizerOptions: {
                preset: [
                    "default",
                    {
                        discardComments: { removeAll: true },
                    },
                ],
            },
        }))

    ]).filter(Boolean),
    stats: { children: false }
};