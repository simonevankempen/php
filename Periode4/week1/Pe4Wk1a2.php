<!DOCTYPE html>

<html>
    <head>
       
    </head>
    
    <body>
<?php


echo "Het is vandaag ";

$wed = date("d");

switch($wed) {
    case "05":
        echo "woensdag";
    break;

}



$may = date("m");

switch($may) {
    case "05":
        echo "Mei";
    break;
}

echo ' ' . date("Y");

echo "<br><br>";


$startDate = "01-01-2016";
$today = "18-05-2016";

$diff = abs(strtotime($today)- strtotime($startDate));

$days = floor(($diff/(60*60*24)));
if($days < 100) {
    echo "0" . $days;
} else {
    echo "Vandaag is het de " . $days. "ste dag van het jaar." ;
}


echo "<br><br>";

$mon = date("d");

switch($mon) {
    case "Wed":
        echo "Woensdag";
    break;
}

echo "Dinsdag is de " . date("N") . "e dag van de week";


echo "<br><br>";


echo "De maand ";


$month = date("m");

switch($month) {
    case "05":
        echo "mei";
    break;
}

echo " heeft " . date("t") . " dagen";


echo "<br><br>";

echo "Het jaar " . date("Y") . " is een ";

$leapyear = date("L");

switch ($leapyear) {
    case '1':
        echo "schrikkeljaar";
        break;
}





?>



</body>

</html>