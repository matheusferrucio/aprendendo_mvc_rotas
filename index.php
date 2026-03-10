<?php
   $autoload = function($class) {
      $arquivo = $class . ".php";

      echo $arquivo;

      if(file_exists($arquivo)) {
         include $arquivo;
      }
   };

   spl_autoload_register($autoload);

   $app = new Application();

   $app->executar();
?>