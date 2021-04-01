<?php

//include Closure/index; // caso não ache o arquivo será informado um warning 
//require Closure/index.php // Caso não ache o arquivo será informado um erro fatal 

// exit 

//exit("Teste de execução de saída");  
print ("teste"); 

// Die 

//die("Teste de Execução de saida"); 

// echo 

echo "Teste"; 

// return 

echo " Returno"; 

//return; 

echo " Esta linha jamais será executada"; 

function somar() {
    return 1 + 1; 
}
//echo somar(); 

// print 

print ("Teste"); 

// Contrutores de avalidação 
echo "<br>"; 

//empty 

$teste = 15.15; 
$time = "winter"; 
$string = "beautiful";

if (!empty($teste)) { 
    echo " Variavel não está vazia"; 
    var_dump($teste); 
}

echo "<br>"; 

//eval 

$str = 'This is $string time in $time'; 
echo $str . "<br>" ;

eval("\$str = \"$str\";");
echo $str; 

echo "<br>"; 

//isset 

$teste = isset($existe);
//var_dump($teste); 


if(isset($existe)) { 
    echo " existe a variavel "; 
}else{
    echo "não existe a variavel "; 
}

echo "<br>" ; 

//unset 

$teste2 = 0; 

unset($teste2); 

var_dump($teste2); 
// será mostrado um notive informando que a variavel não foi definida 

echo "<br>"; 

//list - não funciona com strings 

$info = array('café','marron'); 

list($bebida, $cor) = $info; 

echo "Bebida favorita $bebida da cor $cor"; 

var_dump($bebida); 





