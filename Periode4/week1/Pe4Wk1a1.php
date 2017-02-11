<!DOCTYPE html>

<html>
    <head>
        <style>
            table, th,td {
                border-collapse: collapse;
                border: 1px solid black;
            }
        </style>
    </head>
    
    <body>
    
        
<?php
$auto = array(
    array("Citroen","C3",5,"benzine"),
    array("Ford","Ka",3,"benzine"),
    array("Open","Astra", 4,"diesel")
    );
    

?>

<table>
    <thead>
        <tr><th>merk</th><th>type</th><th>deuren</th><th>brandstof</th></tr>
    </thead>
    <tbody>
        
  

<?php


foreach($auto as $row) {
    echo "<tr>";
    foreach($row as $item) {
        echo "<td>{$item}</td>";
    }
    echo "</tr>";
}


?>
  </tbody>
</table>

</body>

</html>