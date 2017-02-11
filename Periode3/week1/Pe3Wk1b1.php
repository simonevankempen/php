<!DOCTYPE html>
<html>
    <head>
    <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>

<?php
$kleuren["nummer1"] = "red";
$kleuren["nummer2"] = "green";
$kleuren["nummer3"] = "blue";

echo "<table border='1'>";
echo "<td>" . $kleuren["nummer1"]. "</td>";
echo "<td>" .$kleuren["nummer2"] . "</td>";
echo "<td>" . $kleuren["nummer3"] . "</td>";
echo "</table>";

?>

    </body>
</html>