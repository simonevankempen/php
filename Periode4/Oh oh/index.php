<html>
<head>
    <style>
       table {
    width:100%;
}
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;
    }
    table tr:nth-child(even) {
        background-color: #eee;
    }
    table tr:nth-child(odd) {
       background-color:#fff;
    }
    table th {
        background-color: black;
        color: white;
    }
    </style>    
</head>


<?php

require('klant.class.php');
require('instrument.class.php');
require('order.class.php');
require('reparatie.class.php');


$klant1 = new klant();
$klant1-> setKlantId("1");
$klant1-> setNaam("Simone van Kempen");
$klant1-> setAdres("Urkerveste 8, 3432 RA");
$klant1-> setWoonplaats("Nieuwegein");
$klant1-> setTelefoonnummer("06523419");

$klant2 = new klant();
$klant2-> setKlantId("2");
$klant2-> setNaam("Henk de Vries");
$klant2-> setAdres("Hoefstede 43, TH");
$klant2-> setWoonplaats("Houten");
$klant2-> setTelefoonnummer("06964580");


echo "<center><h1>Klanten</h1></center>";

echo "<table><tr><th>klant id</th><th>naam</th><th>adres</th><th>woonplaats</th><th>telefoonnummer</th></tr>";
echo "<tr><td>". $klant1->getKlantId() ." </td><td>". $klant1->getNaam() ."</td><td>" . $klant1->getAdres() . "</td><td>" . $klant1->getWoonplaats() . "</td><td>" . $klant1->getTelefoonnummer() . "</td></tr>
<tr><td>" . $klant2->getKlantId() . "</td><td>" . $klant2->getNaam() . "</td><td>" . $klant2->getAdres(). "</td><td>" . $klant2->getWoonplaats() . "</td><td>" . $klant2->getTelefoonnummer() . "</td>";
     


echo "</tr></table>".  "<br><br>";



$instrument1 = new instrument();
$instrument1-> setInstrumentId("1");
$instrument1-> setSerieNummer("461-520366-9");
$instrument1-> setSnaarDikte("0.11");
$instrument1-> setKlantId("1");

$instrument2 = new instrument();
$instrument2-> setInstrumentId("2");
$instrument2-> setSerieNummer("506-420369-2");
$instrument2-> setSnaarDikte("0.12");
$instrument2-> setKlantId("2");



echo "<center><h1>Instrumenten</h1></center>";

echo "<table><tr><th>instrument id</th><th>serienummer</th><th>snaardikte</th><th>klant id</th></tr>";
echo "<tr><td>". $instrument1->getInstrumentId() ." </td><td>". $instrument1->getSerieNummer() ."</td><td>" . $instrument1->getSnaarDikte() . "</td><td>" . $instrument1->getKlantId() ."</td></tr>
<tr><td>" . $instrument2->getInstrumentId() . "</td><td>" . $instrument2->getSerieNummer() . "</td><td>" . $instrument2->getSnaarDikte(). "</td><td>" . $instrument2->getKlantId() . "</td></td>";
     


echo "</tr></table>".  "<br><br>";


$order1 = new order();
$order1-> setOrderId("2");
$order1-> setReparatieId("1");
$order1-> setDatum("12/06/2016");


$order2 = new order();
$order2-> setOrderId("1");
$order2-> setReparatieId("2");
$order2-> setDatum("10/06/2016");


echo "<center><h1>order</h1></center>";

echo "<table><tr><th>order id</th><th>reparatie id</th><th>datum</th></tr>";
echo "<tr><td>". $order1->getOrderId() ." </td><td>". $order1->getReparatieId() ."</td><td>" . $order1->getDatum() . "</td></tr>
<tr><td>" . $order2->getOrderId() . "</td><td>" . $order2->getReparatieId() . "</td><td>" . $order2->getDatum(). "</td>";
     


echo "</tr></table>".  "<br><br>";

echo "<br><br>";

$reparatie1 = new reparatie();
$reparatie1-> setReparatieId("2");
$reparatie1-> setKosten("&#8364 20,-");


$reparatie2 = new reparatie();
$reparatie2-> setReparatieId("1");
$reparatie2-> setKosten("&#8364 35,-");


echo "<center><h1>reparatie</h1></center>";

echo "<table><tr><th>reparatie id</th><th>kosten</th></tr>";
echo "<tr><td>". $reparatie1->getReparatieId() ." </td><td>". $reparatie1->getKosten() ."</td></tr>
<tr><td>" . $reparatie2->getReparatieId() . "</td><td>" . $reparatie2->getKosten() . "</td>";
     


echo "</tr></table>".  "<br><br>";


echo "<br><br>";
print_r($klant1);

?>



</html>