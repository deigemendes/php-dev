<?php

header("Content-type: image/jpeg"); 

$file = "wallpaper.jpeg"; 

$new_widt = 256; 
$new_height = 256; 

list($old_widt, $old_height) = getimagesize($file); 

$new_image = imagecreatetruecolor($new_widt,$new_height); 
$old_image = imagecreatefromjpeg($file); 

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0 , $new_widt,$new_height, $old_widt, $old_height);

imagejpeg($new_image); 

imagedestroy($new_image);
imagedestroy($old_image); 

?>


