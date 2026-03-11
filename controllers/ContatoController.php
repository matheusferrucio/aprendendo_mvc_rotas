<?php
   namespace Controllers;

   use \Views\MainView as View;

   class ContatoController extends Controller
   {
      public function __construct() {
         $this->view = new View('contato');
      }
      
      public function executar() {
         $this->view->renderizar(['titulo' => 'Contato']);
      }
   }
   
?>