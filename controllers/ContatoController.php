<?php
   namespace Controllers;

   use \Views\ContatoView as Contato;

   class ContatoController extends Controller
   {
      public function __construct() {
         $this->view = new Contato('contato');
      }
      
      public function executar() {
         $this->view->renderizar();
      }
   }
   
?>