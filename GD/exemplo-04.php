<?php

$image = imagecreatefromjpeg("original.jpg"); 

$titlecolor = imagecolorallocate($image, 0,0,0); 


imagettftext($image,32,0,320,250, $titlecolor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf",
 "CERTIFICADO" ); 

 
imagettftext($image,32,0,320,400, $titlecolor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf",
"Deige Mendes" ); 

header("Content-type: image/jpg"); 

imagejpeg($image); 

imagedestroy($image); 

?>
