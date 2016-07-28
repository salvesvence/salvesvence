var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

elixir(function(mix) {

    var bootstrapPath = 'node_modules/bootstrap-sass/assets';

    mix.sass('app.scss')

        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'resources/assets/js/bootstrap')
        .copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js/jquery')

        .scripts([
            'jquery/jquery.min.js',
            'bootstrap/bootstrap.min.js'
        ], 'public/js/app.js')

        .version(['css/app.css', 'js/app.js']);
});
