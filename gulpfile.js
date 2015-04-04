var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

/**
 * Libs
 */
elixir(function(mix) {
    mix.scripts([
        'components/jquery/dist/jquery.min.js',
        'components/angular/angular.min.js',
        'components/angular-resource/angular-resource.min.js',
        'components/angular-bootstrap/ui-bootstrap.min.js',
        'components/angular-bootstrap/ui-bootstrap-tpls.min.js'

    ], 'public/vendor/js/libs.js', 'public/');

});

/**
 * App scripts
 */
elixir(function(mix) {
    mix.scriptsIn("public/js/app/", "public/vendor/js/app.js");
});

/**
 * All css
 */
elixir(function(mix) {
    mix.styles([
        'css/normalize.min.css',
        'css/reset.css',
        'css/style.css',
        
    ], 'public/vendor/css/all.css', 'public/')
});