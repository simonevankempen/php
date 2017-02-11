<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
    Hoi welkom terug ben blij dat je er weer bent
<form action="bestand.php" method="get">
    <p>
        <label for="vervang">Vervang:</label>
        <input type="text" name="vervang" id="voornaam">
    </p>
    <p>
        <label for="nieuw">Nieuw:</label>
        <input type="text" name="nieuw" id="achternaam">
    </p>
    <p>
        <input type="submit" value="verzenden">
    </p>
    <br>
    <input type="checkbox" name="tellenletter" value="l">letters tellen
    <input type="checkbox" name="tellenwoord" value="w">woorden tellen
    <input type="checkbox" name="verander" value="v">woord vervangen
    <input type="checkbox" name="draaien" value="om">tekst omdraaien
    <input type="checkbox" name="verander" value="s">shuffle tekst
</form>
    
<?php

?>
    </body>
</html>