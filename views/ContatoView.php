<?php
    namespace Views;

    class ContatoView 
    {
        private string $fileName;
        
        public function __construct(string $fileName) {
            $this->fileName = $fileName;
        }

        public function renderizar() {
            require_once "pages/" . $this->fileName . ".php";
        }
    }
    
?>