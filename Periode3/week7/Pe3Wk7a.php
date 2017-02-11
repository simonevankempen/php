<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
        
<?php
$severname = "localhost";
$username = "simonee";
$password = "";
$dbname = "cijferlijst";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if (isset($_POST['update'])) {
    $cijfer = $_POST["cijfer"];
    $id = $_POST["id"];
    $sql = "update cijfer set cijfer ='" .$cijfer . "' where id = ". $id;
    $result = $conn->exec($sql);
    
}

if (isset($_POST['verwijderen'])) {
    $cijfer = $_POST["cijfer"];
    $id = $_POST["id"];
    $sql = "DELETE FROM cijfer WHERE id = ". $id;
    $result = $conn->exec($sql);
    
}

$sql="SELECT * from cijfer";
$result = $conn->query($sql);
echo "<table>";
foreach ($result as $row) {
    echo "<tr><td>";
    echo $row["leerlingnaam"]. "</td>";
    echo "<td>". $row["vak"]. "</td>";
    echo "<td><form method='post'>";
    echo "<input type=hidden name='id' value=". $row['id'].">";
    echo "<input name='cijfer' value='" . $row["cijfer"]. "'></input>";
    echo "<input type='submit' name='update' value='update'></td>";
    echo "<td><input type='submit' name='verwijderen' value='verwijderen'></form></td>";
    echo "</tr>";
}

echo "</table>";

if (isset($_POST['send'])) {

$vak = $_POST["vak"];
$leerlingnaam = $_POST["leerlingnaam"];
$cijfer = $_POST["cijfer"];
$sql = "INSERT INTO cijfer  (vak, leerlingnaam, cijfer)VALUES ('$vak', '$leerlingnaam', $cijfer)";
echo $sql;
$conn->exec($sql);
$conn = null;

}

?>

<br><br>
<b>Toevoegen:</b>
<form method="post">
        vak<br>
        <input type="text" name="vak"<br><br>
        leerlingnaam<br>
        <input type="text" name="leerlingnaam"><br>
        cijfer<br>
        <input type="text" name="cijfer"><br>
        <input type="submit" name="send">
    </form>



    </body>
</html>