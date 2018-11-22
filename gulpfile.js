var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

var gulp = require('gulp');

elixir(function (mix) {
      //compile sass to css
    mix.sass('resources/assets/sass/app.scss', 'resources/assets/css');
      //compile css file
    mix.styles(
      [
        'css/app.css',
        'bower/vendor/slick-carousel/slick/slick.css',


      ], 'public/css/all.css', //output file
      'resources/assets' //source folder
    );

    var bowerPath = 'bower/vendor';

    mix.scripts(
      [
      // jquery
      bowerPath + '/jquery/dist/jquery.min.js',

      bowerPath + '/foundation-sites/dist/js/foundation.min.js',

      bowerPath + '/slick-carousel/slick/slick.min.js',

      'js/*.js'

    ], 'public/js/all.js', 'resources/assets'
    ); 

})