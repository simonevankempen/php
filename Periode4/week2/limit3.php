<!DOCTYPE html>
<html>
    <head>
    <link href="stylessheet.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        

  
<?php

require("database.php");

$sql = "SELECT * FROM cijfer ORDER BY leerlingnaam, cijfer ASC LIMIT 5 OFFSET 10";
$result = $conn->query($sql);

$lengte = count($result);

    
echo "<table><th>naam</th><th>vak</th><th>cijfer</th>";
foreach($result as $row) {
    echo "<tr><td>" .$row["leerlingnaam"]. "</td><td>" .$row["vak"]. "</td><td>" .$row["cijfer"]."</td>";
}

echo "</tr></table>";



?>
<br>

<a href="limit1.php">terug naar 1</a>

<br><br>




  

    </body>
</html>