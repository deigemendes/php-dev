<?php 

// recomendado não usar tag de fechamento - devido a problemas de espaço
// Teste passagem por referencia 
// 1. Toda e qualquer variável no PHP deve começar com $ ;
//2. Após o sinal de $ , deve ser seguido por uma letra e não numeros 
//3. Toda e qualquer variável no PHP pode possuir underscores,
// números e letras.


// Passagem por referencia 
echo '1 - Passagem por referencia' ;
echo '</br>';

$a = 'valor X'; 
$b = &$a; 

$a = 'valor Y'; 

print $a;
echo '</br>';
print $b; 

echo '</br>';
echo '2- arrays';
echo '</br>';

$array =[
      'Nome' => 'Deige', 
      'Idade' => 33, 
      
]; 

print_r($array); 

echo '</br>';
echo '3 - Caixa alta - Teste - A sintaxe funciona mais é recomendado não usar ';
echo '</br>';

$c = 0 ; 

if(EMPTY($C)){

    echo 'c não esta vazio '; 
}

CLASS Cachorro { 
     public function Latir() {

        print 'au au au '; 

     }
    }; 

$pastor_alemao =  new Cachorro; 
$pastor_alemao->Latir();


echo '</br>';
echo '4 - utilização de acentos - unica forma de invalidar uma variavel é utilizar numeros no começo ';
echo '</br>';

$coração = "Olá, eu tenho um $coração";
print $coração;

//Caractes especiais 

echo '</br>';
echo 'Strings - aspas simples não interpreta variavel ';
echo '</br>';

// Strings 

$ano = 1993;

print 'Eu nasci em $ano'; 
print "Eu nasci em $ano"; 

/*
Teste de comentários de blocos 
*/

#Teste de compemntários #
