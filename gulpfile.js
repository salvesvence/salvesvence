var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

elixir(function(mix) {

    var bootstrapPath = 'node_modules/bootstrap-sass/assets';

    mix.sass('app.scss')
        .version(['css/app.css'])
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/javascripts/*.js', 'resources/assets/js')
        .copy(bootstrapPath + '/stylesheets', 'resources/assets/sass');
});
