<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        

<?php



$laptops = 

$toshiba ["merk"] = "Toshiba Satellite";
$toshiba ["model"] = "A100";
$toshiba ["os"] = "Windows XP";
$toshiba ["voorraad"] = 80;
$toshiba ["prijs"] = 999;

$acer ["merk"] = "Acer Aspire";
$acer ["model"] = "5732Z";
$acer ["os"] = "Linux";
$acer ["voorraad"] = 0;
$acer ["prijs"] = 888;

$HP ["merk"] = "HP";
$HP ["model"] = "200X";
$HP ["os"] = "Vista";
$HP ["voorraad"] = 50;
$HP ["prijs"] = 777;


$totaal =  $toshiba["prijs"] + $acer["prijs"] + $HP["prijs"];

if($toshiba["voorraad"] || $acer["voorraad"] || $HP["voorraad"] == 0 ) {
  echo  "Uit voorraad";
} else {
    echo "In voorraad";
}

echo "<table border='1'>"."<caption><strong>SML Laptop</caption>
<thead>
<tr><th>Merk</th><th>Model</th><th>Operating System</th><th>Voorraad</th><th>Prijs</th></tr>
</thead>
<tbody>
<tr><td>".$toshiba ["merk"] ."</td>".
"<td>" .  $toshiba["model"] . "</td>" .
"<td>" .  $toshiba["os"] . "</td>" .
"<td>" .  $toshiba["voorraad"] . "</td>" .
"<td>" .  $toshiba["prijs"] . "</td>" .
"</tr>
<tr><td>".$acer ["merk"] ."</td>".
"<td>" .  $acer["model"] . "</td>" .
"<td>" .  $acer["os"] . "</td>" .
"<td>" .  $acer["voorraad"] . "</td>" .
"<td>" .  $acer["prijs"] . "</td>" .
"</tr>
<tr><td>".$HP ["merk"] ."</td>".
"<td>" .  $HP["model"] . "</td>" .
"<td>" .  $HP["os"] . "</td>" .
"<td>" .  $HP["voorraad"] . "</td>" .
"<td>" .  $HP["prijs"] . "</td>" .
"</tr>
<tfoot>
<tr><td colspan='4'>Totaal</td><td>" . $totaal   . "
</td></tr></tfoot></table>";


?>

    </body>
</html>