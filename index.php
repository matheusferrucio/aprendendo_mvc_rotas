<?php
   $autoload = function($class) {
      // Pega o nome da classe dinamicamente
      $arquivo = $class . ".php";

      // Se o arquivo existir, o mesmo é incluído no index.php
      if(file_exists($arquivo)) {
         include $arquivo;
      }
   };

   // Carrega as classes que ainda não foram carregadas quando necessário
   spl_autoload_register($autoload);

   // Instância da minha classe Application
   $app = new Application();

   $app->executar();
?>