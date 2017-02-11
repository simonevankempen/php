<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>



<form method="post" action ="oefen.php">
    <button type="submit" class="knop">Naar pagina 1</button>
</form>

<?php
session_start();
echo "danku voor het bekijken van de website! klik op de knop om terug te gaan";
session_destroy();

?>
    </body>
</html>