<?php
   class application
   {
      public function executar() {
         // Pega e limpa a URL retornando apenas o nome da classe
         $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : "Home";
         
         // Formata com a primeira letra sendo maiúscula
         $url = ucfirst($url);

         // Concatena/adiciona 'Controller' no final da string de url
         $url .= "Controller";

         // Verifica se o arquivo existe antes de instancia-lo
         if(file_exists("controllers/" . $url . ".php")) {
            // Como estou utilizando namespace eu concateno o namespace com o nome da classe para conseguir instancia-la
            $className = "Controllers\\" . $url;
            
            // Instanciando a classe
            $contatos = new $className;

            // Chamando um método da classe referenciada
            $contatos->executar();
         } else {
            die("Esse controllador não existe");
         }
      }
   }
?>