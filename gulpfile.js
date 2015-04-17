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
 * Admin js
 */
elixir(function (mix) {

    mix.scripts([
        'public/pub_admin/js/jquery.js',
        'public/pub_admin/js/bootstrap.min.js',
        'public/pub_admin/js/plugins/metisMenu/metisMenu.min.js',
        'public/pub_admin/js/sb-admin-2.js',
        'public/js/bootbox.min.js',
        'public/pub_admin/js/plugins/dataTables/jquery.dataTables.js',
        'public/pub_admin/js/plugins/dataTables/dataTables.bootstrap.js',

    ], 'public/pub_admin/js/admin.js', 'public');

});

/**
 * Admin css
 */
elixir(function (mix) {
    mix.styles([
        'public/pub_admin/css/bootstrap.min.css',
        'public/pub_admin/css/plugins/metisMenu/metisMenu.min.css',
        'public/pub_admin/css/plugins/timeline.css',
        'public/pub_admin/css/sb-admin-2.css',
        'public/pub_admin/css/plugins/morris.css',

    ], 'public/pub_admin/css/all.css', 'public')
});