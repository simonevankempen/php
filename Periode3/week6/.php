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
$sql = "select leerlingnaam, vak, cijfer from cijfer where leerlingnaam = 'Hans'";
$result = $conn->query($sql);

echo "<table><tr><th>cijfers</th></tr>";

$count = "";
$totaal = 0;
foreach($result as $row) {
    echo "<tr><td>" .$row["leerlingnaam"]. "</td><td>".$row["vak"]. "</td><td>" .$row["cijfer"]."</td></tr>";
    $count = $count +1;
    $totaal += $row["cijfer"];
}

$gemiddelde =($totaal/$count);

echo "<tr><td><b>Totaal</b></td><td>". $totaal."</td></tr><tr><td><b>gemiddelde</b></td><td>". $gemiddelde."</td></tr></table>";


$conn = null;


?>
    </body>
</html>