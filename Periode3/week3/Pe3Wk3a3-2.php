<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
    

<form method="get" action="Pe3Wk3a3-3.php">
    <button type="submit" class="knop">click</button>
</form>


<?php

session_start();

$_SESSION["naam"] = $_GET["naam"];
echo "Welkom" . " " . $_SESSION["naam"];


?>


    </body>
</html>