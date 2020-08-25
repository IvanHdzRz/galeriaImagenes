<?php
    $myImage=$_FILES['imagen'];
    $imageName=$myImage['name'];
    $fileType=$myImage['type'];
    $isImage=$fileType=='image/jpeg'||$fileType=='image/png';
  
    if($isImage){
        move_uploaded_file($myImage['tmp_name'],'./images/'.$imageName);
        echo'imagen subida';
        
    }else{
        echo'sube una imagen gil';
    }


    die();
?>