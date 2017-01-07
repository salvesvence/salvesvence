const elixir = require('laravel-elixir'),
    inProduction = elixir.config.production;

require('laravel-elixir-vue-2');

elixir.config.sourcemaps = false;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    const bootstrapPath = 'node_modules/bootstrap-sass/assets',
          slickPath = 'node_modules/slick-carousel/slick';

    if (! inProduction) {
        mix.copy(bootstrapPath + '/fonts', 'public/fonts')
            .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'resources/assets/js/bootstrap')
            .copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js/jquery')
            .copy('node_modules/bootstrap-fileinput-npm/js/fileinput.min.js', 'resources/assets/js/kartik')
            .copy([
                'node_modules/vue/dist/vue.min.js',
                'node_modules/vue-resource/dist/vue-resource.min.js'
            ], 'resources/assets/js/vue')
            .copy(slickPath + '/fonts', 'public/fonts/slick')
            .copy(slickPath + '/*.css', 'public/css/slick')
            .copy(slickPath + '/*.js', 'public/js/slick')
            .copy(slickPath + '/ajax-loader.gif', 'public/gifs/ajax-loader.gif')
    }

    mix.sass('app.scss', 'resources/assets/css/app.css')

        .styles(['app.css', 'animate.css'], 'public/css/app.min.css')

        .scripts([
            'jquery/jquery.min.js',
            'vue/vue.min.js',
            'vue/vue-resource.min.js',
            'kartik/fileinput.min.js',
            'bootstrap/bootstrap.min.js',
            'bootstrap/bootstrap.min.js',
            'scripts/modals.js',
            'scripts/forms.js'
        ], 'public/js/app.min.js')

        .webpack([
            'scripts/list-table.js'
        ], 'public/js/scripts.js')

        .version(['css/app.min.css', 'js/app.min.js']);
});