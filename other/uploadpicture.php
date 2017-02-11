<!DOCTYPE html>

<html>
    
    <head>
      
        
    </head>
    
<?php

if(isset($_POST["submit"])) {
    $file_name = $_FILES["image"]["name"];
    $file_type = $_FILES["image"]["type"];
    $file_size =  $_FILES["image"]["size"];
    $file_tmp_name = $_FILES["image"]["tmp_name"];
    
    if($file_name) {
        move_uploaded_file($file_tmp_name, "login/$file_name");
    }
}


?>

<body>
    
    
<form action="uploadpicture.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" id="fileToUpload">
    <input type="submit" name="submit" value="upload_img">
</form>



        
<?php 

$folder ="login/";

if(is_dir($folder)) {
    
    if($handle = opendir($folder)) {
        
        while(($file==readdir($handle)) != false) {
            if($file==='.' || $file ==='..') continue;
            echo '<img src="other/'. $file. '"width="150" height="150" alt="">';
        }
        
        closedir($handle);
    }
}


?>


</html>