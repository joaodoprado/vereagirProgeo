const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/js/app.js')
    .addStyleEntry('styles', './assets/css/styles.css')
    .enableSassLoader()
    .cleanupOutputBeforeBuild()
    //.enableBuildNotifications() // Desativar notificações de build
    .enableTypeScriptLoader()
    .enableVueLoader()
    .enableVersioning(Encore.isProduction())
    .enableFontPreload();

module.exports = Encore.getWebpackConfig();
