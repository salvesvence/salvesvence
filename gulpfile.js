var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

var inProduction = elixir.config.production;

elixir(function(mix) {

    var bootstrapPath = 'node_modules/bootstrap-sass/assets';

    if (! inProduction) {

        mix.copy(bootstrapPath + '/fonts', 'public/fonts')
            .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'resources/assets/js/bootstrap')
            .copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js/jquery')
            .copy([
                'node_modules/vue/dist/vue.min.js',
                'node_modules/vue-resource/dist/vue-resource.min.js'
            ], 'resources/assets/js/vue')
    }

    mix.sass('app.scss', 'resources/assets/css/app.css')

        .styles(['app.css', 'animate.css'], 'public/css/app.min.css')

        .scripts([
            'jquery/jquery.min.js',
            'vue/vue.min.js',
            'vue/vue-resource.min.js',
            'bootstrap/bootstrap.min.js',
            'scripts/modals.js',
            'scripts/forms.js'
        ], 'public/js/app.min.js')

        .browserify([
            'scripts/list-table.js'
        ], 'public/js/scripts.js')

        .version(['css/app.min.css', 'js/app.min.js']);
});