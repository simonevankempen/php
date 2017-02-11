

<?php

session_start();

if(isset($_SESSION[$username])) {
    $_SESSION[$username] = $_SESSION[$username] +1;
    
} else {
    $_SESSION["views"] = 1;
}

?>
<html>
    <body>
        
        <p>Pageviews: <?php echo "Welkom".$_SESSION[$username]; ?></p>

    </body>
</html>