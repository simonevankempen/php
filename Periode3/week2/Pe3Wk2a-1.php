<!DOCTYPE html>
<html>
    <head>
    <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
    

<?php
$simone["engels"] = "7";
$simone["nederlands"] = "8";
$simone["duits"] = "9";
$simone["ICT"] = "9";

echo "<table border='1'>";
echo "<tr><td>" . "Engels" . "</td>" . "<td>" . $simone["engels"] ."</td></tr>";
echo "<tr><td>" . "Nederlands" . "</td>" . "<td>" . $simone["nederlands"]. "</td></tr>";
echo "<tr><td>" . "Duits" . "</td>" . "<td>".  $simone["duits"]. "</td></tr>";
echo "<tr><td>" . "ICT". "</td>" . "<td>" . $simone["ICT"] . "</td></tr>";
echo "<tr><td>" . "Gemiddelde" . "</td>" . "<td>" . (round(array_sum($simone)/ count($simone))). "</td></tr>";
echo "</table>";

?>
    </body>
</html>