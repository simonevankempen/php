<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?php
        if(isset($_POST["submit"])) {
            echo "<h1>welkom" ." ". $_POST["voornaam"]. " " . $_POST["achternaam"] .  "</h1>";
            echo "<p>" . "straatnaam en huisnummer:" . " " . $_POST["straat"] . " " . $_POST["huisnummer"] . "</p>";
            echo "<p>" . "postcode en woonplaats:" . " " . $_POST["postcode"] . " " . $_POST["woonplaats"] . "</p>";
            echo "<p>" . "klas en leeftijd:" . " " . $_POST["klas"] . " " . $_POST["leeftijd"]. "</p>";
            echo "<p>" . "opmerking:" . "<br />" . $_POST["opmerking"] . "</p>";
            echo "<p>" . "geslacht:" . " " . $_POST["gender"] . "</p>";
        }
        
        ?>
        
        
        
        <form method="post">
        Voornaam:<br>
        <input type="text" maxlength="30" name="voornaam" value="" placeholder="voornaam" required /><br>
        Achternaam:<br>
        <input type="text" maxlength="50" name="achternaam" value="" placeholder="achternaam" required /><br>
        Straatnaam:<br>
        <input type="text" maxlength="40" name="straat" value="" placeholder="straat" /><br>
        Huisnummer:<br>
        <input type="text" maxlength="4"  name="huisnummer" value="" placeholder="huisnummer" required /><br>
        Postcode:<br>
        <input type="text" maxlength="6"  name="postcode" value="" placeholder="postcode" required /><br>
        Woonplaats:<br>
        <input type="text" maxlength="40" name="woonplaats" value="" placeholder="woonplaats" /><br>
        Klas:<br>
        <input type="text" maxlength="4"  name="klas" value="" placeholder="klas" required /><br>
        Leeftijd:<br>
        <input type="text" maxlength="3"  name="leeftijd" value="" placeholder="leeftijd" required /><br>
        Opmerkingen:<br>
        <textarea type="text" maxlength="200" name="opmerking" value="" placeholder="opmerkingen"></textarea><br>
        Geslacht:<br>
        female <input type="radio" name="gender" value="female" required />
        male <input type="radio" name="gender" value="male"><br>
        <input type="submit" name="submit" value="verzenden">
    </form>

    </body>
</html>