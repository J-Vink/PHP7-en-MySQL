<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <?php
      $getal = 6;

      echo "<h3>Patroon I</h3><br>";
      echo "<table>";
      for($i = 1; $i <= $getal; $i++) {
        echo "<tr>";
        for($j = 1; $j <= $i; $j++){
          echo "<td>$j</td>";
        }
        echo "<tr>";
      }
      echo "</table>";
      echo "<br>";

      echo "<h3>Patroon II</h3><br>";
      echo "<table>";
      for($i = $getal; $i > 0; $i--) {
        echo "<tr>";
        for($j = 1; $j <= $i; $j++){
          echo "<td>$j</td>";
        }
        echo "<tr>";
      }
      echo "</table>";
      echo "<br>";

      echo "<h3>Patroon III</h3><br>";
      echo "<table>";
      $teller = 0;
      for($i = 1; $i <= $getal; $i++) {
        echo "<tr>";
        for($j = 1; $j <= $getal; $j++){
          if($j >= $getal-$teller){
            echo "<td>" . ($getal-($j-1)) . "</td>";
          }
          else{
            echo "<td></td>";
          }
        }
        $teller++;
        echo "<tr>";
      }
      echo "</table>";
      echo "<br>";

      echo "<h3>Patroon IV</h3><br>";
      echo "<table>";
      for($i = 1; $i <= $getal; $i++) {
        echo "<tr>";
        for($j = 1; $j <= $getal; $j++){
          if($j >= $i){
            echo "<td>$j</td>";
          }
          else{
            echo "<td></td>";
          }
        }
        echo "<tr>";
      }
      echo "</table>";
    ?>
  </body>
</html>
