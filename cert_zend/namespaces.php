<?php

// Logo após abertura - normal padrao cammel case // possivel usar 2 namespaces no mesmo arquivo 

namespace certzend{ //valido 

class teste1 { 

    public $teste = 0; 

    public function __construct()
    {
        echo "teste1";
    }
}

$teste1 = new teste1;
} 

//namespace 1certzend; //invalido 
namespace _certizend { //valido 

class teste1 { 

    public $teste = 0; 

    public function __construct()
    {
        echo "teste2";
    }
}

$teste2 = new teste1; 
}