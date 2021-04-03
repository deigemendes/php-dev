<?php 

namespace certzend; 

// Constantes 

//define(1CONSTANTE, 'TESTE'); // invalido 
define(_CONSTANTE, 'TESTE2'); //Valido
define(minhaconstante, 'teste3') ; //válido 
define($minhaconstate, 'teste4'); //invalido 

//constantes mágicas 

echo __DIR__ ;
echo "<br>";
echo __LINE__; 
echo "<br>"; 
echo __FILE__ ; 
echo "<br>"; 

function NomeFuncao() {

    $teste_const = 0 ; 

    echo __FUNCTION__ ; 
    echo "<br>"; 

}

$teste= NomeFuncao(); 

class NomeClasse { 

    public $teste_const2 = 0 ;

    public function __construct()
    {
        echo __CLASS__ ; 
        echo "<br>"; 
        echo __METHOD__; 
        echo "<br>"; 
        echo __NAMESPACE__; 
    }

}

$teste2 = new NomeClasse; 