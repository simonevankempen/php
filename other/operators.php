        
<?php
define("TITLE" , "Simdesigns");

$my_name ="Simone van Kempen";

$yearsOnEarth       = 25.32;
$favouriteStringNum = "1";
$birthCountry       = "Canada";
$lessonNum          = 14;




?>



<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TITLE; ?></title>
        
        <div>
            
            <h3>Equal <code>==</code></h3>
            
            <?php
            
            if ($yearsOnEarth == 25.32) {
                
                echo "<p>Your age is equal to $yearsOnEarth</p>";
            }
            
            
            ?>
            
            
            
            <h3>Identical <code>===</code></h3>
            
            <?php
            
            if ($favouriteStringNum === 1) {
                
                echo "<p>Your favourite number is an integer</p>";
                
            } elseif ($favouriteStringNum === "1") {
                
                echo "<p>Your favourite number is a string called 1</p>";
               
            } else {
                
                echo "<p>You must have a different favourite number than 1 the integer or string</p>";
            }
            
            ?>
            
             <h3>Not Equal <code>!=</code></h3>
            
            <?php
            
            if($birthCountry != "Mexico") {
                
                echo "<p>Excuse me senior. You must not be from around here </p>";
            }
         
            
            ?>
            
            
            
            <h3>Not Identical <code>!==</code></h3>
            
            <?php   
            
            if($yearsOnEarth !== "25.32") {
                
                echo "<p>You are not exactly the string '$yearsOnEarth'</p>";
                
            }else{
                
                echo "<p>You are exactly the string '$yearsOnEarth'</p>";
                
            }
            
            ?>
            
            <h3>Less than <code><</code></h3>
            
            
            <?php
            
            if($lessonNum < 15) {
                
                echo "<p>You haven't quite made it to lesson 15, yet</p>";
            }
            
            ?>
            
            <h3>Greater than <code>></code></h3>
            
            
            <?php
            
            if($lessonNum > 10) {
                
                echo "<p>You've made it passed lesson 10!</p>";
            }
            
            ?>
            
            
            <h3>Less than or Equal to <code><=</code></h3>
            
            
            <?php
            
            if($lessonNum <= 14) {
                
                echo "<p>$lessonNum is less than or equal to 14</p>";
            }
            
            ?>
            
            <h3>Greater than or Equal to<code>>=</code></h3>
            
            
            <?php
            
            if($lessonNum >= 4) {
                
                echo "<p>$lessonNum is greater or equal to 4</p>";
            }
            
            ?>
         
            
         
            
        </div>
    
    </head>
    
    <body>
        
 

    </body>
</html>