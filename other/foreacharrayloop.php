<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
        
<?php

$arr = array(
    array(
        "ID" => 1,
        "Name" => "Simone van Kempen",
        "Age" => "25",
        "City" => "Utrecht",    
        "Country" => "The Netherlands"
        ),
    array(
        "ID" => 2,
        "Name" => "Kevin Luik",
        "Age" => "20",
        "City" => "Antwerp",
        "Country" => "Belgium"
        ),
    array(
        "ID" => 3,
        "Name" => "Alfred Futterkiste",
        "Age" => "28",
        "City" => "Munchen",
        "Country" => "Germany"
        ),
    array(
        "ID" => 4,
        "Name" => "Frederique Citeaux",
        "Age" => "30",
        "City" => "Paris",
        "Country" => "France"
        ));


foreach($arr as $var) {
    foreach($var as $key => $info) {
        echo $key . ":" . $info . "<br>";
    }
}

?>
        

    </body>
</html>