<?php

$filename = "original.csv"; 

if (file_exists($filename)){

$file = fopen($filename,"r");

$headers = explode(",", fgets($file));

$data = array(); 

while ( $row = fgets($file)){

$row_data = explode(",", $row);
$linha = array(); 

for( $i = 0; $i < count($headers); $i++ ) {

$linha[$headers[$i]] = $row_data[$i]; 


}

array_push($data, $linha); 


} 

echo json_encode($data); 

fclose($file); 


}

?> 