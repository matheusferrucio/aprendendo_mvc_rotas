<?php
   class application
   {
      public function executar() {
         $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : "Home";
         $url = ucfirst($url);
         $url .= "Controller";

         if(file_exists("controllers/" . $url . ".php")) {
            $className = "Controllers\\" . $url;
            
            // echo "Carregando a classe: " . $url;
            $contatos = new $className; // Instanciando a classe
            $contatos->executar();
         } else {
            die("Esse controllador não existe");
         }
      }
   }
?>