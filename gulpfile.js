const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix){
    mix.sass('app.scss')
       .webpack('app.js')

       .styles([
           'bootstrap.min.css',
           'colors.min.css',
           'components.min.css',
           'core.min.css',
           '/icons/fontawesome/styles.min.css',
           '/icons/fontawesome/fonts/FontAwesome.otf',
           '/icons/fontawesome/fonts/fontawesome-webfont.eot',
           '/icons/fontawesome/fonts/fontawesome-webfont.svg',
           '/icons/fontawesome/fonts/fontawesome-webfont.ttf',
           '/icons/fontawesome/fonts/fontawesome-webfont.woff',
           '/icons/fontawesome/fonts/fontawesome-webfont.woff2',
           '/icons/glyphicons/glyphicons-halflings-regular.eot',
           '/icons/glyphicons/glyphicons-halflings-regular.svg',
           '/icons/glyphicons/glyphicons-halflings-regular.ttf',
           '/icons/glyphicons/glyphicons-halflings-regular.woff',
           '/icons/glyphicons/glyphicons-halflings-regular.woff2',
           '/icons/icomoon/styles.css',
           '/icons/icomoon/fonts/icomoon.eot',
           '/icons/icomoon/fonts/icomoon.svg',
           '/icons/icomoon/fonts/icomoon.ttf',
           '/icons/icomoon/fonts/icomoon.woff',

       ],'public/css/lib.css')

        .scripts([
            // 'bootstrap.js',
            '/core/libraries/jquery.min.js',
            '/core/libraries/bootstrap.min.js',
            'plugins/loaders/pace.min.js',
            'plugins/loaders/blockui.min.js',
            'plugins/visualization/d3/d3.min.js',
            'plugins/visualization/d3/d3_tooltip.js',
            'plugins/forms/styling/switchery.min.js',
            'plugins/forms/styling/uniform.min.js',
            'plugins/forms/selects/bootstrap_multiselect.js',
            'plugins/ui/moment/moment.min.js',
            'plugins/pickers/daterangepicker.js',
            'pages/dashboard.js',


            '/core/libraries/jquery_ui/autocomplete.min.js',
            '/core/libraries/jquery_ui/button.min.js',
            '/core/libraries/jquery_ui/core.min.js',
            '/core/libraries/jquery_ui/datepicker.min.js',
            '/core/libraries/jquery_ui/effects.min.js',
            '/core/libraries/jquery_ui/full.min.js',
            '/core/libraries/jquery_ui/interactions.min.js',
            '/core/libraries/jquery_ui/position.min.js',
            '/core/libraries/jquery_ui/sliders.min.js',
            '/core/libraries/jquery_ui/touch.min.js',
            '/pages/form_inputs.js',
            '/pages/sidebar_detached_sticky_native.js',
            '/plugins/forms/selects/select2.min.js',
            '/plugins/forms/styling/switchery.min.js',
            '/plugins/forms/styling/uniform.min.js',
            '/plugins/ui/prism.min.js',


        ],'public/js/lib.js')
});
