<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
        
        <table border="1">
        
<?php
$i =0;

while($i<100) {
    if($i%10==0) {
        echo "<tr>", PHP_EOL;
    }
    echo "<td>" . $i . "</td>". PHP_EOL;
    $i++;
    if($i%10==0) {
        echo "</tr>". PHP_EOL;
    }
} 

?>

</table>
    </body>
</html>