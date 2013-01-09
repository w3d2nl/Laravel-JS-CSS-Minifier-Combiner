Laravel-Minifier
================
With this bundle, the Laravel framework can minify your CSS and JS assets, and will cache it until it changes.
It uses the fabulous plugin Minify (http://code.google.com/p/minify/).

Simple in your templates type:

    <link href="<?=Minifier::make(array('//css/main.css'))?>" rel="stylesheet" type="text/css">

OR

  <script>
    <link href="<?=Minifier::make(array('//css/main.css', '//css/main2.css'))?>" rel="stylesheet" type="text/css">
  </script>

You can do the same thing with JavaScript.
