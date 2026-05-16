// webpack.config.js
const Encore = require('@symfony/webpack-encore');
const webpack = require('webpack'); // <--- AJOUTEZ CETTE LIGNE EN HAUT

if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/app.js')
    .enableStimulusBridge('./assets/controllers.json')
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.23';
    })
    
    // Assure l'injection de jQuery partout
    .autoProvidejQuery()

    // CORRECTION ICI : Force l'ordre des modules et résout le conflit FixedHeader
    .addPlugin(new webpack.ProvidePlugin({
        'window.DataTable': 'datatables.net-bs5',
        '$.fn.dataTable': 'datatables.net-bs5'
    }))
;

module.exports = Encore.getWebpackConfig();