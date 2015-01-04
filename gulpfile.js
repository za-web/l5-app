var elixir = require('laravel-elixir');

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

elixir(function (mix) {
    // mix.sass('app.scss');\
    mix.styles([
        'public/css/vendor/sticky-footer.css',
        'public/css/vendor/style.css',
    ])
        .version('public/css/all.css')

        .publish(
        'jquery/dist/jquery.min.js',
        'public/js/jquery.min.js'
    )
        .publish(
        'jquery/dist/jquery.min.map',
        'public/js/jquery.min.map'
    )
        .publish(
        'bootstrap/dist/js/bootstrap.min.js',
        'public/js/bootstrap.min.js'
    )
        .publish(
        'bootstrap/dist/css/bootstrap.min.css',
        'public/css/bootstrap.min.css'
    )
        .publish(
        'bootstrap/dist/css/bootstrap-theme.min.css',
        'public/css/bootstrap-theme.min.css'
    )
        .publish(
        'bootstrap/dist/fonts',
        'public/fonts'
    )
        .publish(
        'font-awesome/css/font-awesome.min.css',
        'public/css/font-awesome.min.css'
    )
        .publish(
        'font-awesome/fonts',
        'public/css/fonts'
    )
});
