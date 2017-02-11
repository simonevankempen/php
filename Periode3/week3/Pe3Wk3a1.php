<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
  
function som1(){
    $x = 8;
    $y = 10;
    $z = $x + $y;
       echo "<h3>som 1</h3>";
       echo "<p>x + y = $z </p>";
       return $z;
       
} 
$a = som1();
$b = $x;
$c = $a + $b;

echo  "<h3> som 2 </h3>";
echo "<p>a + b =" . " ". $c . "</p>";

som3($a);
som4(4);
som5();

function som3($f) {
     global $c;
     $g = $c;
     $h = $g + $f;
     echo  "<h3> som 3 </h3>";
     echo"<p>f + g =" ." " .  $h . "</p>";
}

function som4($nummer) {
    static $i=0;
    $i++;
    global $a;
    $j = $a + $i;
    echo  "<h3> som $nummer </h3> ";
    echo "<p> a + i =" . " ". $j . "</p>";
    $a = $j;
} 
function som5() {
    som4(5);
}
?>

</body>
</html>