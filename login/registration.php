<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <style>
            a:link {
                color:black;
                list-style-type:none;
            }
        </style>
    </head>
    <body>
<?php
$severname = "localhost";
$username = "simonee";
$password = "";
$dbname = "loginscherm";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if(isset($_POST['send'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = crypt($password);
    $sql = "INSERT INTO account (username, password) values ('$username' , 'crypt($password)')";
    
    $conn->exec($sql);
    
     $message = "Registration succesfull!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    $conn = null;
}


?>



<form method="post">
    <a href="test1.php">Update en verwijder</a><br><br>
    Registration:<br><br>
        Username:<br>
        <input type="text" name="username"<br><br>
        Password:<br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="send">
    </form>
    
    <br><br>
    
    
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
<br><br>Picture:
<form action="imagesql.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" value="Upload">
        </form>

    </body>
</html>