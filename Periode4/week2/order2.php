<html>
    <head>
        <link href="stylessheet.css" rel="stylesheet" type="text/css">
    </head>


<?php

require("database.php");

$sql = "SELECT * FROM cijfer ORDER BY leerlingnaam ASC";
$result = $conn->query($sql);

$lengte = count($result);

    
echo "<table><th><a href='order2.php'>naam</a></th><th><a href='order3.php'>vak</a></th><th><a href='order1.php'>cijfer</a></th>";
foreach($result as $row) {
    echo "<tr><td>" .$row["leerlingnaam"]. "</td><td>" .$row["vak"]. "</td><td>" .$row["cijfer"]."</td>";
}

echo "</tr></table>";



?>

</html>