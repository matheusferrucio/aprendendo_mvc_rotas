<?php
    namespace Views;

    class MainView 
    {
        private string $fileName;
        private string $header;
        private string $footer;
        
        public function __construct(string $fileName, string $header = 'header', string $footer = 'footer') {
            $this->fileName = $fileName;
            $this->header   = $header;
            $this->footer   = $footer;
        }

        public function renderizar(array $arr = []) {
            require_once "pages/templates/" . $this->header . ".php";
            require_once "pages/" . $this->fileName . ".php";
            require_once "pages/templates/" . $this->footer . ".php";
        }
    }
    
?>