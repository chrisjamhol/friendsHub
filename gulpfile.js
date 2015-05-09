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
    var styles = [
        'skel.css',
        'style.css',
        'style-wide.css'
    ];

    var scripts = [
        'jquery.min.js',
        'jquery.scrolly.min.js',
        'jquery.scrollzer.min.js',
        'skel.min.js',
        'skel-layers.min.js',
        'init.js',
        'main.js'
    ];

    mix.less('app.less');

    mix.styles(styles, 'public/css/app.css', 'public/css');

    mix.scripts(scripts, 'public/js/app.js', 'public/js');

    mix.version([
        'public/css/app.css',
        'public/js/app.js'
    ]);

    mix.copy('resources/assets/bower_components', 'public/bower_components');
    mix.copy('resources/assets/custom_elements', 'public/custom_elements');
});
