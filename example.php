<?php

define('LIB_DIR', getcwd() . 'lib/');

include("php-closure.php");

$c = new PhpClosure();
$c->add("my-app.js")
  ->add("popup.js")
  ->add("popup.soy") // new
  ->advancedMode()
  ->cacheDir("/tmp/js-cache/")
  ->localCompile() // new
  ->write();

