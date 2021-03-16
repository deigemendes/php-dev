<?php

$image = imagecreatefromjpeg("original.jpg"); 

$titlecolor = imagecolorallocate($image, 0,0,0); 
$gray = imagecolorallocate($image,100,100,100); 

imagestring($image,5,450,150,"CERTIFICADO", $titlecolor); 
imagestring($image,5,440,350,"Deige Mendes", $titlecolor);
imagestring($image,5,440,370,utf8_encode("Emitido em : "). date("d/m/y"), $titlecolor);

header("Content-type: image/jpg"); 

imagejpeg($image,"certificado.jpg" ); 

imagedestroy($image); 

?>
