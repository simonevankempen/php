<!DOCTYPE html>
<html>
    <head>
    <link href="stylessheet.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        

  
<?php

require("database.php");

$sql = "SELECT leerlingnaam, vak, cijfer FROM cijfer ORDER BY leerlingnaam, cijfer ASC LIMIT 5";
$result = $conn->query($sql);

$lengte = count($result);

echo "<table><tr><th>naam</th><th>vak</th><th>cijfer</th></tr>";

foreach($result as $row) {
    echo "<tr><td>" .$row["leerlingnaam"] . "</td><td>" . $row["vak"] . "</td><td>" . $row["cijfer"] . "</td>";
}

echo "</td></table>";

$conn = null;


?>
<br>

<a href="limit2.php">Next</a>

<br><br>




  

    </body>
</html>