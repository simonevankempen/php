<!DOCTYPE html>
<html>
    <head>
    <link href="stylessheet.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        

  
<?php
$severname = "localhost";
$username = "simonee";
$password = "";
$dbname = "cijferlijst";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "select leerlingnaam, vak, cijfer from cijfer";
$result = $conn->query($sql);

$lengte = count($result);

    
echo "<table><tr><th>leerlingnaam</th><th>vak</th><th>cijfer</th></tr>";
foreach($result as $row) {
    echo "<tr><td>" .$row["leerlingnaam"]. "</td><td>" .$row["vak"]. "</td><td>" .$row["cijfer"]."</td>";
}

echo "</tr></table>";


$conn = null;


?>
    </body>
</html>