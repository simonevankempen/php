        
<?php
define("TITLE" , "Simdesigns");

$my_name ="Simone van Kempen";
$lessonNum          = 15;

$username = "johnnyboy";
$password = "qwerty";

$cartTotal = 19.99;
$couponCode = "DiscountPlease";




?>



<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TITLE; ?></title>
        
        <div>
            
        <h3>And <code>and</code></h3>
        
        <?php
        
        if ($username == "johnnyboy" and $password == "qwerty") {
            echo "<p>Login info is correct!</p>"; "<p>Login info is correct!</p>";
        } else {
            echo "wrong username and password!";
        }
        
        ?>
        
        <h3>Or <code>or</code></h3>
        
        <?php
        
        if($cartTotal > 15 or $couponCode == "DiscountNow") {
            
            echo "You get a discount!";
            
        
                
        } else {
            
            echo "You don't get a discount";
        }
        
        ?>
        
        
        <h3>Not <code>!</code></h3>      

        
        <?php
        
        $ownDog = true;
        
        if(!$ownDog) {
            
            
            echo "You do not own a dog";
            
        } else {
            
            echo "You own a dog";
        }
        
        ?>
        
        <h3>And <code>&&</code></h3>      

        
        <?php
        
        if($username == "johnnyboy" && $password == "qwerty") {
            
            echo "login info is correct";
        } else {
            
            echo "wrong login in";
        }
        
        ?>
        
        <h3>Or <code>||</code></h3>      

        
        <?php
        
        if($cartTotal > 15 || $couponCode == "DiscountPlease") {
            
            echo "You get a discount!";
        } else {
            
            echo "You don't get discount";
        }
        
        ?>
         
        
            
        </div>
    
    </head>
    
        
 

    </body>
</html>