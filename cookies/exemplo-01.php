<?php 

$data = array( 

    "empresa"=> "Deige Php"
); 

setcookie("NOME DO COOKIE", json_encode($data), time() + 3600 ); 

echo "Ok"; 

?> 