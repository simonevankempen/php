<!DOCTYPE html>
<html>
    
    <head>
        <style>
            table, tr, td {
                border-collapse:collapse;
                border:1px solid black;
            }
        </style>
        
    </head>
    

<body>

        
<?php 
require("database.php");

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->execute();
    
    echo $stmt->rowCount(). " Record updated succesfully!";

}
catch(PDOException $e)  {
    echo $sql. "<br>" . $e->getMessage();
    
}
$conn=null;




?>


</html>