<?php 

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" ; 

$contents = file_get_contents($link);

$parse = parse_url($link); 

$basename = basename($parse["path"]); 

$file = fopen($basename,"w+");

fwrite($file, $contents); 

fclose($file); 


?> 

<img src="<?=$basename?>"> 