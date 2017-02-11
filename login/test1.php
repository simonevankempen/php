
<!DOCTYPE html>

<html>
   
    <head>
    <script src="jquery.js"></script>
    <style>
        #hah {
            display:none;
        }
    </style>
    </head>
    
    <body>
        
<?php
 session_start();
$severname = "localhost";
$username = "simonee";
$password = "";
$dbname = "loginscherm";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


//update
if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $sql = "update account set username='$username', password='$password' where id='$id'";
    $result = $conn->exec($sql);
    
}

//verwijderen

if (isset($_POST['verwijderen'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $sql = "DELETE FROM account WHERE id = ". $id;
    $result = $conn->exec($sql);
    $message = "verwijderd";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
}

//send

if(isset($_POST['send'])) {

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO account  (username, password) VALUES ('$username', '$password')";
$conn->exec($sql);


}

//select


$sql="SELECT * from account";
$result = $conn->query($sql);
echo "<table>";
foreach ($result as $row) {
    echo "<tr><td>";
    echo $row['username']. "</td>";
    echo "<td>". $row['password']. "</td>";
    echo "<td><form method='post'>";
    echo "<input type=hidden name='id' value=". $row['id'].">";
    echo "<input name='username' value='" . $row['username']. "'></input>";
    echo "<input name='password' type='password' value='" . $row['password']. "'></input>";
    echo "<input type='submit' name='update' value='update'></td>";
    echo "<td><input type='submit' name='verwijderen' value='verwijderen'></form></td>";
    echo "</tr>";
}
 
echo "</table>";

$conn = null;

?>

<br><br>
<form method="post" id="hah">
        Username<br>
        <input type="text" name="username"<br><br>
        Password<br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="send"><br>
    </form><br>
<button id="button">Registratie</button>
<script src="toggle.js"></script>


<br><br><br>

<?php

 session_start();
echo '<form method="post" action ="login.php">
    <button type="submit" class="knop">logout</button>
</form>';


session_destroy();
?>

    </body>
</html>