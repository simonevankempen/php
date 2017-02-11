<!DOCTYPE html>
<html>


<head>

<style>
  table, th, tr, td {
border-collapse: collapse;
border: 1px solid black;
}

td {
  padding:5px;
}

</style>
<title> </title>
</head>
<body>

<?php
$simone['engels'] = array(8,7);
$simone['nederlands'] = array(6,7);
$simone['ondernemendheid'] = array(9,8);
$simone['programming'] = array(7,8);
$simone['ICT'] = array(7,8);
?>
<?php
function gemiddeld($array = []) {
  $teller = 0;
  $tellerarray = 0;
  $cijfer = [];
  foreach ($array as $key => $array2) {
    $tellerarray++;
    foreach ($array2 as $key2 => $value) {
      $cijfer[$teller] = $value;
      $teller++;
    }
  }
  $gemiddelde = array_sum($cijfer) / count($cijfer);
  return $gemiddelde;
}
?>
<table>
<?php
foreach ($simone as $key => $array) {
  echo "<tr>";
  echo "<th>" . $key . "</th>";
  foreach ($array as $key2 => $value) {
  echo "<td>" .$value . "</td>";
  }
  echo "</tr>";
 
}
?>

</table>
  Gemiddelde <?php echo "<th><tr><td>". gemiddeld($simone). "</td></tr></th>"; ?>


</body>
</html>