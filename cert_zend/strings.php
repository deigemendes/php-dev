<?php

# Simulação de string 

# Nowdoc - não interpreta variaveis 

$a = 2;

$string = <<<'MEUTEXTO'
            SELECT 

            SC7.C7_FILIAL, 
            SC7.C7_NUM, 
            SC7.C7_PRODUTO,
            SC7.C7_TIPO , 
            SC7.C7_FORNECE, 
            SA2.A2_NOME, 
            SC7.C7_LOJA, 
            SC7.C7_EMISSAO, 
            SC7.C7_XCODCOM 
            
            FROM SC7010 AS SC7 
            $a 
            MEUTEXTO; 
            
echo $string; 
echo "<br>"; 

# Heredoc  -  interpreta variaveis 

$string = <<<MEUTEXTO
            SELECT 

            SC7.C7_FILIAL, 
            SC7.C7_NUM, 
            SC7.C7_PRODUTO,
            SC7.C7_TIPO , 
            SC7.C7_FORNECE, 
            SA2.A2_NOME, 
            SC7.C7_LOJA, 
            SC7.C7_EMISSAO, 
            SC7.C7_XCODCOM 
            
            FROM SC7010 AS SC7 
            $a 
            MEUTEXTO; 
            
echo $string; 

echo "<br><hr>";

# manipulação de strings - strpos 

$texto = 'abcd'; 

print strpos($texto, 'b'); #inicia na posição 0 
print strpos($texto, 'a'); #inicia na posição 0 

echo "<br>"; 

if(strpos($texto,'b')) {
    print "olá eu existo"; 
}

echo "<br>";

if(strpos($texto,'a')) {
    print "olá eu existo"; 
}else{
    print "não existo"; # print retorna o 0 como falso 
}

echo "<br>"; 

$texto1 = 'abcd'; 

if(false == strpos($texto1,'a')){
    print "Óla eu existo"; 
}else {
    print "não existo"; 
}

echo "<br>"; 

# inicia na posição desejada !
if(false == strpos($texto1,'a',1)){
    print "Óla eu existo"; 
}else {
    print "não existo"; 
}

echo "<br>"; 

$comecar = -1; 

# inicia na posição desejada !
if(false == strpos($texto1,'a',$comecar)){
    print "Óla eu existo"; 
}else {
    print "não existo"; 
}

echo "<br>";

$texto2 = 'ABCD';

if(true === stripos($texto2,'b')){
    print "Óla eu existo "; # considera as letras maiusculas 
    echo stripos($texto2,'b'); 
}else {
    print "não existo"; 
    echo stripos($texto2,'b'); 
}

echo "<br><hr>";

# string como arrays 

$texto3 = 'zend certified enginner';

for($i = 0 ; $i < strlen($texto3) ; $i++){
    print $texto3[$i]; 
}

# retornar parte da string 

echo "<br>"; 

$email = 'php@php.net'; 

print strstr($email, '@'); 
echo " / ";
print strstr($email, '@', true); # retorna da esquerda 

echo "<br><hr>";

# substr 

$codigo = '22.AAAA.33.XX'; 

print substr($codigo , 0, 2); 

echo "<br><hr>";

#trim 

$codigo2 = '    XXX.2222    ';

print trim($codigo2);

$codigo3 = 'aPHPa'; 

print ltrim($codigo3 , 'a'); # remove espaços em branco caso nenhum caractere seja apontado 
print rtrim($codigo3 , 'a'); 
echo "<br>";
print chop($codigo3, 'a'); # mesmo comportamento da função Rtrim 








