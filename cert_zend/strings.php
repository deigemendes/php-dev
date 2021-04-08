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








