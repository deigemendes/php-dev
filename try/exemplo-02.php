<?php

function tratanome($nome) {

if (!$nome) { 
  
  throw new Exception("Sem nome informado" . "<br>", 99); 
  
}

   echo ucfirst($nome). "<br>" ;
}


try{

tratanome("Deige Mendes"); 
tratanome("");

} catch(Exception $e) {
       
    echo $e->getMessage();

  
} finally {

Echo "Enviado email ao adm"; 

}

?> 