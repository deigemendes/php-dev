<?php

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

$str = 'This is $string time in $time'; 
echo $str . "<br>" ;

eval("\$str = \"$str\";");
echo $str; 







