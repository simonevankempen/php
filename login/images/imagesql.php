
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <form action="imagesql.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" value="Upload">
        </form>
        
       <ul>
            <li>File name:<?php echo $_FILES["image"]["name"] ?></li>
            <li>File size:<?php echo $_FILES["image"]["size"] ?></li>
        </ul>
        
        <?php
        
        // connect to database
        
        
mysql_connect("localhost","simonee","") or die(mysql_error());
mysql_select_db("images") or die(mysql_error());;
       
        
        //file properties
        
        $file = $_FILES["image"]["tmp_name"];
        
        if(!isset($file)) {
            
            echo "Please select an image.";
        }
        else{
            
          $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
          $image_name = addslashes($_FILES["image"]["name"]);
          $image_size = getimagesize($_FILES["image"]["tmp_name"]);
          
          
          if($image_size == false) {
              
              echo "that's not an image";
          }
          else {
              
              
             if(!$insert = mysql_query("INSERT INTO imageupload VALUES ('', '$image_name','$image')")) {
                 
                 echo "problem uploading image";
             }
             else{
                 
                 $lastid = mysql_insert_id();
                 echo "image uploaded.<p>Your image:</p><img src=get.php?id=$lastid>";
                 
             }
          }
        }
        
        
        
        
        ?>

    </body>
</html>