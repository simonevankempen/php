<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
    
<?php
$row = 4;
$col = 3;

echo "<table border='1'>";
for($r=0;$r<$row;$r++) {
    echo "<tr>";
 for($k=0;$k<$col;$k++){
     echo "<td>";
     echo $r, "", $k+1;
     echo "</td>";
 }
     echo "</tr>";
}
    echo "</table>";
?>
    </body>
</html>