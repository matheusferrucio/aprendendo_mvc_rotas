<?php
   namespace Controllers;

   use \Views\MainView as View;

   class HomeController 
   {
      public function __construct() {
         $this->view = new View('home');
      }
      
      public function executar() {
         $this->view->renderizar(['titulo' => 'Home']);
      }
   }
   
?>