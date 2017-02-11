<!DOCTYPE html>

<html>
    
    <head>
        
        
        </head>

<body>


<?php


require("database.php");

if ($conn -> connect_error) {
    die("Connection failed:" . $conn -> connect_error);
}

$stmt = $conn -> prepare ("INSERT INTO cijfer (vak, leerlingnaam, cijfer) VALUES (?,?,?)");
$stmt -> bind_param("sss", $vak, $leerlingnaam, $cijfer);

$vak = "latijns";
$leerlingnaam = "Klaas";
$cijfer = 6;
$stmt -> execute();


$stmt->close();
$conn->close();

  
?>




    

</html>