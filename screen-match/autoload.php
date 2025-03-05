<?php

spl_autoload_register(function (string $className) {
  $src = str_replace("ScreenMatch", "src", $className) . '.php';
  $src = str_replace('\\', DIRECTORY_SEPARATOR, $src );
  
  $fullSrc = __DIR__ . DIRECTORY_SEPARATOR . $src;

  if (file_exists($fullSrc)){
    require_once $fullSrc;
  };
});