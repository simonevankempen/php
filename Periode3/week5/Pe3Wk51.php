<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
    

<?php
print_r($_POST);
$severname = "localhost";
$username = "simonee";
$password = "";
$dbname = "cijferlijst";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if (isset($_POST['send'])) {

$vak = $_POST["vak"];
$leerlingnaam = $_POST["leerlingnaam"];
$cijfer = $_POST["cijfer"];
$sql = "INSERT INTO cijfer (vak, leerlingnaam, cijfer) VALUES ('$vak', '$leerlingnaam', '$cijfer')";

$conn->exec($sql);
$conn = null;

}

?>

<form method="post">
        vak<br>
        <input type="text" name="vak"<br><br>
        leerlingnaam<br>
        <input type="text" name="leerlingnaam"><br>
        cijfer<br>
        <input type="text" name="cijfer">
        <input type="submit" name="send">
    </form>



    
</body>
</html>