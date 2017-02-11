<!DOCTYPE html>
<html>
    <head>
    <script src="jquery.js"></script>
     <script src="toggle.js"></script>
    <link href="eind.css" rel="stylesheet" type="text/css"
   
    </head>
    
    <body>
        
<?php
require("database.php");

echo "<form method='post'>";

//update SQL*/

if (isset($_POST['update'])) {
    $cijfer = $_POST["cijfer"];
    $id = $_POST["id"];
    $sql = "update cijfer set cijfer ='" .$cijfer . "' where id = ". $id;
    $result = $conn->exec($sql);
    
}

/*Verwijder SQL */

if (isset($_POST['verwijderen'])) {
    $cijfer = $_POST["cijfer"];
    $id = $_POST["id"];
    $sql = "DELETE FROM cijfer WHERE id = ". $id;
    $result = $conn->exec($sql);
    $message = "verwijderd";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
}

/*Send SQL*/

if (isset($_POST['send'])) {

$vak = $_POST["vak"];
$leerlingnaam = $_POST["leerlingnaam"];
$cijfer = $_POST["cijfer"];
$sql = "INSERT INTO cijfer  (vak, leerlingnaam, cijfer) VALUES ('$vak', '$leerlingnaam', $cijfer)";
$conn->exec($sql);
$message = "toegevoegd";
echo "<script type='text/javascript'>alert('$message');</script>";

}


$sql = "select DISTINCT leerlingnaam from cijfer";
$result = $conn->query($sql);

echo "<select name=lnaam onchange=submit()>";
echo "<option value=' '>leerlingen</option>";

  foreach($result as $row) {
      
      echo "<option value='".$row["leerlingnaam"]."' onchange='submit()'>".$row["leerlingnaam"]."</option>";
  }
 echo "</select>";
 echo "</form>";
 
/*Select leerling uit de tabel cijfer*/
if(isset($_POST['lnaam'])) {
    $naam = $_POST["lnaam"];
    $sql = "select leerlingnaam, vak, cijfer from cijfer where leerlingnaam  = '$naam'";

} else {
$sql="SELECT * from cijfer";}
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
    /*Laat de naam en cijfer zien van persoon die geselecteerd id*/
}

echo "</table>";
$conn = null;
?>


<form id="hah" method="post" >
    <b>Toevoegen:</b><br>
        vak<br>
        <input type="text" name="vak"<br><br>
        leerlingnaam<br>
        <input type="text" name="leerlingnaam"><br>
        cijfer<br>
        <input type="text" name="cijfer"><br><br>
        <input type="submit" name="send">
    </form>
   
<br>
<button>Insert</button>

    </body>
</html>