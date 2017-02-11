<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
        
        

<form method="POST">
    <input type="text" name="veld1" id="een">
    <input type="text" name="veld2" id="twee"><br>
    <input type="radio" name="radio1" value="<"><<br>
    <input type="radio" name="radio1" value="=">=<br>
    <input type="radio" name="radio1" value=">"><br>
    <input type="submit" name="submit">
</form>
        
      <?php
      if(isset($_POST["submit"])) {
          $waarde1 = $_POST["veld1"];
          $waarde2 = $_POST["veld2"];
          $operator = $_POST["radio1"];
          
          switch($operator){
              case "<":
                  if($waarde1 < $waarde2) {
                      echo "dit klopt";
                  } else {
                      echo "dit klopt niet";
                  }
                  break;
              case "=" :
                  if($waarde1 == $waarde2) {
                      echo "dit klopt";
                  } else {
                      echo "dit klopt niet";
                  }
                  break;
              case ">" : 
                  if($waarde1 > $waarde2) {
                      echo "dit klopt";
                  }else {
                      echo "dit klopt niet";
                  }
                  break;
          }
      }
      
      ?>
            
            
        
        
        
            
        </div>
    </form>
    
    </body>
</html>