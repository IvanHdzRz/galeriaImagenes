<?php 
    include('navigation.php');
    echo '<h1>galeria</h1>';
    //se abre carpeta 
    $gestorImagenes=opendir('./images');
    if($gestorImagenes):
        while(($image=readdir($gestorImagenes))!=false):
            if($image!='.'&&$image!='..'):
                echo '<img src=./images/'.$image.' alt='.$image.' />';
            endif;
        endwhile;
    endif;

    include('footer.php')
?>