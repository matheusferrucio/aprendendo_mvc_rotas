<?php
   namespace Controllers;

   use \Views\MainView as View;

   class ContatoController extends Controller
   {
      const titulo = 'Contato';
      
      public function __construct() {
         $this->view = new View('contato');
      }
      
      public function executar() {
         $this->view->renderizar();
      }
   }
?>