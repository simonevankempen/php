<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
        <?php
     if (isset($_POST["submit"])) {
        if (empty($_POST["voornaam"])) {
        $naamErr = "name is required";
        } else {
        $naam = test_input($_POST["voornaam"]);
        }}
        
        if (isset($_POST["submit"])) {
        if (empty($_POST["achternaam"])) {
        $achternaamErr = "lastname is required";
        } else {
        $naam = test_input($_POST["achternaam"]);
        }}
        
        if (isset($_POST["submit"])) {
        if (empty($_POST["huisnummer"])) {
        $huisnummerErr = "huisnummer is required";
        } else {
        $huisnummer = test_input($_POST["huisnummer"]);
        }}
        
        if (isset($_POST["submit"])) {
        if (empty($_POST["postcode"])) {
        $postcodeErr = "postcode is required";
        } else {
        $postcode = test_input($_POST["postcode"]);
        }}
        
        if (isset($_POST["submit"])) {
        if (empty($_POST["klas"])) {
        $klasErr = "klas is required";
        } else {
        $klas = test_input($_POST["klas"]);
        }}
        
        if (isset($_POST["submit"])) {
        if (empty($_POST["leeftijd"])) {
        $leeftijdErr = "leeftijd is required";
        } else {
        $leeftijd = test_input($_POST["leeftijd"]);
        }}
        
        if (isset($_POST["submit"])) {
        if (empty($_POST["geslacht"])) {
        $geslachtErr = "geslacht is required";
        } else {
        $geslacht = test_input($_POST["geslacht"]);
        }}
        
        ?>
        <form method="post">
        Voornaam:<br>
        <input type="text" maxlength="30" name="voornaam" value="<?php echo $_POST['voornaam']; ?>" placeholder="voornaam" required /><br>
        Achternaam:<br>
        <input type="text" maxlength="50" name="achternaam" value="<?php echo $_POST['achternaam']; ?>" placeholder="achternaam" required /><br>
        Straatnaam:<br>
        <input type="text" maxlength="40" name="straat" value="<?php echo $_POST['straat']; ?>" placeholder="straat" /><br>
        Huisnummer:<br>
        <input type="text" maxlength="4"  name="huisnummer" value="<?php echo $_POST['huisnummer']; ?>" placeholder="huisnummer" required /><br>
        Postcode:<br>
        <input type="text" maxlength="6"  name="postcode" value="<?php echo $_POST['postcode']; ?>" placeholder="postcode" required /><br>
        Woonplaats:<br>
        <input type="text" maxlength="40" name="woonplaats" value="<?php echo $_POST['woonplaats']; ?>" placeholder="woonplaats" /><br>
        Klas:<br>
        <input type="text" maxlength="4"  name="klas" value="<?php echo $_POST['klas']; ?>" placeholder="klas" required /><br>
        Leeftijd:<br>
        <input type="text" maxlength="3"  name="leeftijd" value="<?php echo $_POST['leeftijd']; ?>" placeholder="leeftijd" required /><br>
        Opmerkingen:<br>
        <textarea type="text" maxlength="200" name="opmerking" value="" placeholder="opmerkingen"></textarea><br>
        Geslacht:<br>
        female <input type="radio" name="gender" value="female" required />
        male <input type="radio" name="gender" value="male"><br>
        <input type="submit" name="submit" value="verzenden">
    </form>

    </body>
</html>