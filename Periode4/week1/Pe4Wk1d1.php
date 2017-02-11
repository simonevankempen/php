<!doctype html>
<html lang="en">
<head>
    <style>
        td, th, td {
            border:1px solid black;
            width:7px;
            height:7px;
        }
    </style>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    
    
    <form method="POST">
        <input name="exporteren" type="submit" value="Exporteren"/>
    </form>
    
<?php

require ("database.php");

$sql = "SELECT leerlingnaam, vak, cijfer FROM cijfer";

$result = $conn -> query($sql);

$string ="";

echo "<table><tr><th>leerlingnaam</th><th>vak</th><th>cijfer</th></tr>";

foreach($result as $row) {

echo "<tr><td>" . $row["leerlingnaam"]."</td><td>" . $row["vak"] . "</td><td>". $row["cijfer"]. "</td>";
$string .= "-" .$row["leerlingnaam"] ." ".$row["vak"] . " " . $row["cijfer"] . "\n";

}

echo "</tr></table>";

if(isset($_POST["exporteren"])) {
    
    $myfile = fopen("cijfer.txt" ,"w") or die("kan bestand niet openen");
    $txt = date("Y/m/d"). " ".date("h:i:sa"). "\n";
    fwrite($myfile, $txt);
    
    $txt = $string;
    fwrite($myfile, $txt);
    fclose($myfile);
}

$conn = null;



?>
    


    
</body>
</html>