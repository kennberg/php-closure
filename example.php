<?php

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

