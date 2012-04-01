php-closure
======================

This is an extension of the original library found here: http://code.google.com/p/php-closure/

New features:

  * Compile locally using Google Closure Compiler
  * Support for Google Closure Templates and Soy-To-Js Compiler
  * Add directories with source files.

For the latest Google Closure Compiler and Template files visit:

  * http://closure-compiler.googlecode.com/files/compiler-latest.zip
  * http://closure-templates.googlecode.com/files/closure-templates-for-javascript-latest.zip

How to use
======================

PHP wrapper for the Google Closure JS Compiler web service.

Handles caching and recompilation of sources.  A recompilation will occur
whenever a source file, or the script calling the compiler, changes.

The class will handle the Last-Modified and 304 redirects for you, but if
you should set Cache-Control headers appropriate for your needs.

Make sure you define LIB\_DIR, then place the jar files and soyutils.js under
LIB\_DIR/third-party/.

Example usage:

    define('LIB_DIR', getcwd() . 'lib/');

    include(LIB_DIR . 'third-party/php-closure.php');

    $c = new PhpClosure();
    $c->add('my-app.js')
      ->addDir('/js/') // new
      ->add('popup.js')
      ->add('popup.soy') // new
      ->advancedMode()
      ->cacheDir('/tmp/js-cache/')
      ->localCompile() // new
      ->write();

See http://code.google.com/closure/compiler/docs/api-ref.html for more
details on the compiler options.

License
======================
Apache v2. See the LICENSE file.
