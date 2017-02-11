<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
        
<h2>Multiplication Table</h2>
<form action="Tafels.php" method="post">
    Enter a number:
    <input type="text" name="txtnum" />
    <input type="submit" />
</form>
        
<?php

if($_POST['txtnum']){

$mult = $_POST['txtnum'];

for($i=1;$i<=10;$i++){
    echo $i. " X " . $mult. " = " . $i*$mult. "<br>";
}   
}
?>


    </body>
</html>