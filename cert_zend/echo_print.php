<?php

// analise resultado echo e print - print retorna valor 

$teste = 0 ; 
$string = 'teste'; 

echo $teste.$string; 
echo "<br>"; 

echo '1' . ( print '2') + 10 ; //214 //mudará no php 8 // print retorna o valor mais 1 do boleano 
echo "<br>"; 

echo "1" + 2 * "0x02"; // Não consegue converter os dados da string e retorna 0 


