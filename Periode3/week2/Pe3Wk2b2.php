<!DOCTYPE html>
<html>
    <head>
    <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
    
<?php
$simone ["Engels"] = 7;
$simone ["Nederlands"] = 6;
$simone ["Ondernemendheid"] = 9;
$simone ["Programming"] = 7;
$simone ["ICT"] = 7;

echo "<table border='1'>";
foreach ($simone as $vak=>$value) {
    echo "<tr><td>";
	echo $vak . ":" . $value ;
	echo "</td>" . "<br> ";	}
	
	
	$gemiddelde = (round (array_sum($simone)/count($simone) ));
	echo "<tr><td><br>";
	echo " Gemiddelde:". $gemiddelde;
    echo "</tr></td>";

echo "</table>";

?>
    </body>
</html>