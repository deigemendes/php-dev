<?php

namespace cert_Zend\namespace2; 

class Conexao { 

    public function getConexao(){
        $dsn = "teste"; 
        $user = "root"; 
        $password = "teste1"; 

        return new \PDO($dsn, $user, $password);
    }
}

$teste = new Conexao; 
$teste->getConexao(); 