<?php

// quatro operadores basicos ( + - / % * ) 

// Teste módular 

$valor1 = 9; 
$valor2 = 2; 

$total = $valor1 % $valor2; 

echo $total;  
echo "Teste de validação" ;

$valor1 += 10; 

echo $valor1; 

// short forms 

$soma += 10;

print $soma;

// operadores de atribuição 

$lista = [
    0=>1,
    1=>0

]; 



print $lista; 

// Comparações somente valor 

$a = 0; 
$b = '0'; 

if($a == $b) {
    print "São Iguais";
}

// Comparações somente valor e tipo 

if($a === $b) {
    print "São Iguais";
}else {
    print "São Diferentes";
}

echo "<br>"; 

// Operadores Bitwise 

print_r ( 7 << 9);

echo "<br>"; 

print_r ( 4 >> 6); 

//Operadores de negação 
echo "<br>"; 

print_r (~ 7); 

// Calculo Bitwise  
echo "<br>"; 

print_r ( 5 & 2 ); 
print_r ( 5 | 2 );
print_r ( 3 ^ 2 );

// Exemplo utilização - php.ini error reporting - E_ALL & ~E_NOTICE 


