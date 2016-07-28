var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

elixir(function(mix) {

    var bootstrapPath = 'node_modules/bootstrap-sass/assets';

    mix.sass('app.scss')
        .scripts([
            'bootstrap/bootstrap.min.js'
        ])
        .version(['css/app.css', 'js/all.js'])
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'resources/assets/js/bootstrap');
});
