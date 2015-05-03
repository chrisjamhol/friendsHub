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

elixir(function(mix) {
    mix.phpUnit();

    mix.less('app.less').coffee();

    mix.styles([
        'app.css'
    ], 'public/css/style.css', 'public/css');

    mix.version('public/css/style.css');
});
