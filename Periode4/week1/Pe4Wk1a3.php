<!DOCTYPE html>
<html>
    <head>
        <style>
            th,td{
                border:2px solid black;
               
            }
            
         table {
             width:394px;
         }
         
         td {
             width:62px;
             text-align:center;
         }
       
            
        </style>
        <title> </title>
    </head>
    <body>
        
        
        <form method="post">
            
            Jaar:
            <select name="year">
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            </select>
            
            Maand:
                <select name="month">
                <option value="1">januari</option>
                <option value="2">februari</option>
                <option value="3">maart</option>
                <option value="4">april</option>
                <option value="5">mei</option>
                <option value="6">juni</option>
                <option value="7">juli</option>
                <option value="8">augustus</option>
                <option value="9">september</option>
                <option value="10">october</option>
                <option value="11">november</option>
                <option value="12">december</option>
                </select>
            
         <button>zoek</button>
        </form>
        
        <?php
        
        
        
        
        
        
        
        
        if (isset($_POST["year"])){
            $jaar = $_POST["year"]; 
  $maand = $_POST["month"];
         
 $date=date_create();
date_date_set($date,$jaar,$maand,01);

 $month= date_format($date, "m");
 $year = date_format($date, "Y");    
 $name_day= date_format($date, "D");
 $name_month = date_format($date, "F"); 
  
  switch($name_day){
   case "Sun": $leeg = 0; break;
   case "Mon": $leeg = 1; break;
   case "Tue": $leeg = 2; break;
   case "Wed": $leeg = 3; break;
   case "Thu": $leeg = 4; break;
   case "Fri": $leeg = 5; break;
   case "Sat": $leeg = 6; break;
       }
       
       
    switch($name_month){
   case "January": $naammaand = "januari"; break;
   case "February": $naammaand= "februari"; break;
   case "March": $naammaand = "maart"; break;
   case "April": $naammaand = "april"; break;
   case "May": $naammaand = "mei"; break;
   case "June": $naammaand = "juni"; break;
   case "July": $naammaand = "juli"; break;
    case "August": $naammaand = "augustus"; break;
   case "September": $naammaand = "september"; break;
   case "October": $naammaand = "oktober"; break;
   case "November": $naammaand= "november"; break;
   case "December": $naammaand = "december"; break;
  
        
        
    }   
       
       
       
       $dagen_maand = cal_days_in_month(0, $month, $year);
       
  echo "<table>";
   echo "<tr><th colspan=60>".$naammaand."  ".$year."</th></tr>";  
   echo "<tr><td>zo</td><td>ma</td><td>di</td><td>wo</td><td>do</td><td>vr</td><td>za</td></tr>";
  
 $dag_tel = 1;
 
 echo "<tr>";
  while($leeg > 0){
      echo "<td></td>";
      $leeg = $leeg -1;
      $dag_tel++;
}

$dag_num = 1;

while($dag_num <= $dagen_maand){
  echo "<td> $dag_num</td>";
  $dag_num++;
  $dag_tel++;
  
  if($dag_tel > 7){
      echo "<tr></tr>";
      $dag_tel = 1;
  }
 }
 
 while($dag_tel > 1 && $dag_tel <= 7){
    echo "<td></td>"; 
    $dag_tel++;
 }
  
  echo"</tr></table>";
         }
         

        
        
        ?>

    </body>
</html>