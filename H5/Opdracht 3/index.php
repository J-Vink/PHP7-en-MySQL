<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <?php
      echo "<table>";
      for($i = 1; $i <= 8; $i++) {
        echo "<tr>";
        $teller = 1;
        for ($j=1; $j <= 15; $j++) {
          // Check of het aan de linker of rechterkant staat
          if($j <= 8){
            if($j > 8-$i){
              echo "<td>" . $teller . "</td>";
              $teller *= 2;
            }
            else{
              echo "<td> </td>";
            }
          }
          else{
            if($teller > 1){
              $teller /= 2;
              echo "<td>" . $teller . "</td>";
            }
          }
          if($j == 8){
            $teller /= 2;
          }
        }
        echo "</tr>";
      }
      echo "</table>";
    ?>
  </body>
</html>
