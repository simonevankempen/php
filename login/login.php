

<?php

$severname = "localhost";
$username = "simonee";
$password = "";
$dbname = "loginscherm";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


if(isset($_POST['blabla'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username) or empty($password)) {
        echo "Please fill in!";
    } else
    $sql = "SELECT * FROM account WHERE username='".$username."'AND password='".$password."' LIMIT 1";
    $res = mysql_query($sql);
      if (mysql_num_rows($res) == 1) {
        $message = "logged in!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $_SESSION['bla'] = $_POST['username'];
        header('refresh:0; url=test1.php');
        exit();
    } 
    else {
        echo "login failed!";
        exit();
        
    }
    
  

}
?>



<!DOCTYPE html>
<html>
    <head>

    </head>

<body>
<form method="post" action="test1.php">
    Username:<br>
    <input type="text" name="username"><br>
    Password:<br>
    <input type="password" name="password"><br><br>
    <input type="submit" name="blabla">
    
    
</form>




    </body>
</html>