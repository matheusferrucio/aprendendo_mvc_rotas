<?php
    namespace Controllers;

    use \Views\MainView as View;

    class SobreController extends Controller
    { 
        public function __construct() {
            $this->view = new View('sobre');
        }

        public function executar() {
            $this->view->renderizar(['titulo' => 'Sobre']);
        }
    }
?>