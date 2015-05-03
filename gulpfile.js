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
    mix.less('app.less');

    mix.styles([
        'app.css'
    ], 'public/css/style.css', 'public/css');

    mix.version([
        'public/css/style.css'
    ]);

    mix.copy('resources/assets/bower_components', 'public/bower_components');
    mix.copy('resources/assets/custom_elements', 'public/custom_elements');
});
