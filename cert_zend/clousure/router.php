<?php

    class Router {

        private $routes; 
        private $charset = 'UTF-8'; 
        private $contentType = 'text/html'; 
        
        public function addRoute($path, \Closure $clousure) {
            
            $this->routes[$path] = $clousure->bindTo($this, __CLASS__); 

        }

        public function dispatch($currentPath) {
            foreach ($this->routes as $path => $clos) {
                if ($currentPath == $path) {
                    $clos(); 
                }
            }

            header('Content-type:'. $this->contentType);

            echo 'Pagina Sobre ';

        }

    }
        
    
