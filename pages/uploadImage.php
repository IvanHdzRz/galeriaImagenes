<?php
    include('../navigation.php');

?>
<form method='POST' action='../saveImage.php' enctype='multipart/form-data'>  
    <label for ='image'>choose one image :D </label>
    <input type='file' name='imagen' id='image'/>
    <input type='submit' value='Upload' />
</form>

<?php
    include('../footer.php');

?>