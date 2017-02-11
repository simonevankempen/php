<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
    


<?php
$vervang = $_GET["vervang"];
$nieuw = $_GET["nieuw"]; 
$zin = "Hoi welkom terug ben blij dat je er weer bent"; 

if (isset($_GET["tellenletter"])) {
$letter = $_GET["tellenletter"]; echo "De tekst heeft: " . strlen(str_replace($vervang ,$nieuw ,$zin)) . " zoveel letters" . "
"; echo str_replace($vervang ,$nieuw ,$zin) . "
"; } 
else if (isset($GET["tellenwoord"])) { 
$woord = $_GET["tellenwoord"]; echo "De tekst heeft: " . str_word_count(str_replace($vervang ,$nieuw ,$zin)) . " woorden" . "
"; echo str_replace($vervang ,$nieuw ,$zin) . "
"; } 
else if (isset($_GET["draaien"])) { 
$draaien = $_GET["draaien"]; echo strrev(str_replace($vervang ,$nieuw ,$zin)) . "
"; echo str_replace($vervang ,$nieuw ,$zin) . "
"; }
else if(isset($_GET["verander"])) {
$shuffle = $_GET["verander"]; echo str_shuffle(str_replace($vervang, $nieuw, $zin))." 
"; echo str_replace($vervang, $nieuw, $zin). "
";}
?>


    </body>
</html>
