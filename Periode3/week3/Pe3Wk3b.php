<!DOCTYPE html>
<html>


<head>

<link href="style.css" rel="stylesheet" type="text/css" media="all">
<title> </title>

<script></script>


<body>
<?php

$hobbies = array('gamen', 'lezen', 'sporten', 'computeren');
$cijfers['programeren'] = array(5,5);
$cijfers['nederlands'] = array(7,3);
echo "<b>Twee array's:</b>";
echo "<br>";
print_r($hobbies);
echo "<br>";
print_r($cijfers);

echo "<br>";

sort($hobbies);
ksort($cijfers);
echo "<br>";
for($x=0; $x< 4; $x++) {
echo $hobbies[$x];
echo "<br>";
} 

echo "<br>";

foreach ($cijfers as $key => $value) {
foreach ($value as $key2 => $value2) {
echo $value2;
echo "-";
}
}
echo "<br>";
echo "<br>";
echo implode("-",$hobbies);



?>


</body>
</html>