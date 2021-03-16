
<form method="POST" enctype="multipart/form-data">

<input type="file" name="fileupload" > 

<button type="submit"> Send </button>

</form>

<?php

if($_SERVER["$REQUEST_METHOD"]= "POST"){

    

$file = $_FILES["fileupload"]; 

    if ($file["error"]){ 

        throw new Exception("Error : ", $file["error"]); 
        

    }

    $diruploads = "uploads"; 

    if(!is_dir($diruploads)) {

        mkdir($diruploads) ; 

    }
  
    if (move_uploaded_file($file["temp_name"], $diruploads . DIRECTORY_SEPARATOR . $file["name"] )) {
        
        echo "sucesso"; 

    } else { 

        throw new Exception("Erro");

        echo "Erro"; 

    }


}


?> 