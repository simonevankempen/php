<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
    

<?php
$tekst = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";
echo $tekst . "<br><br>";
echo "Lengte van de tekst is:" . strlen($tekst)."<br>";
echo "Aantal woorden in de tekst:" . str_word_count($tekst) . "<br>";
echo "<p>" . "verander het woord Ipsum:" . "</p>";
echo str_replace("Ipsum" , "yolo" , $tekst) . "<br><br>";
echo "<p>" . "Shuffle tekst:". "</p>";
echo  str_shuffle($tekst);


?>
    </body>
</html>