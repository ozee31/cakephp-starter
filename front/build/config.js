module.exports = {
  entry: {
    app: ['./front/src/scss/app.scss', './front/src/js/app.js']
  },
  port: 3003,
  html: false,
  assets_url: '/',  // Urls dans le fichier final
  assets_path: './webroot/', // ou build ?
  refresh: ['./src/**/*.php', './src/**/*.ctp', './src/**/*.tpl', './src/**/*.twig'] // Permet de forcer le rafraichissement du navigateur lors de la modification de ces fichiers
}
