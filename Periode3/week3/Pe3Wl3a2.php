<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
    
<?php
$cijfers = array(9.5, 4, 6, 7,5);

function gemiddelde($rij) {
    return array_sum($rij)/ count($rij);
}
$gem = gemiddelde($cijfers);


?>
    </body>
</html>