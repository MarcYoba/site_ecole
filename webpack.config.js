const Encore = require('@symfony/webpack-encore');

if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // 1. Dossiers de sortie
    .setOutputPath('public/build/')
    .setPublicPath('/build')

    /*
     * ENTRY CONFIG
     */
    // Votre point d'entrée principal (qui importe déjà jQuery, Bootstrap, CSS, etc.)
    .addEntry('app', './assets/app.js')
    
    // Si vous séparez le code DataTables dans un fichier à part (assurez-vous que ce fichier existe !)
    .addEntry('datatables', './assets/datatables.js')

    // Active le pont Symfony UX Stimulus
    .enableStimulusBridge('./assets/controllers.json')

    // Découpe intelligemment vos fichiers (le code "vendor" comme jQuery y sera placé automatiquement)
    .splitEntryChunks()

    // Génère un fichier runtime.js nécessaire pour le bon fonctionnement des scripts partagés
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())

    // Configuration de Babel pour la compatibilité des navigateurs
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.23';
    })

    // INJECTION GLOBALE DE JQUERY (Résout le problème du "jQuery is not defined")
    .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();