<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
        
<?php

$scores = array(65, 78, 90, 35, 20);

averager($scores);

function averager($array) {
    $total = 0;
    foreach($array as $value) {
        $total += $value;
    }
    $average = $total/count($array);
    echo $average;
}

$scores = array(80,40,56,140,90);

gemiddelde ($scores);

function gemiddelde($array) {
    $total = 0;
    foreach($array as $value) {
        $total += $value;
    }
    $gemiddelde = $total/count($array);
    echo $gemiddelde;
}

$score =  array(90,15,39,50,51,96);

gemiddelde ($scores);

function gemiddelde($array) {
    $total=0;
    foreach($array as $value) {
        $total += $value;
       
    }
     $gemiddelde = $total/count($array);
     echo $gemiddelde;
}
  
?>
        

    </body>
</html>