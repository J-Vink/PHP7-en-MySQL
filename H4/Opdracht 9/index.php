<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $getallen = array();
      $getallen = [18, 12, 22];

      echo "<table border='0px'>";
      for($i = 0; $i < count($getallen); $i++) {
        echo "<tr>";
        echo "<td>-</td>";
        echo "<td>Zijde " . ($i+1) . ":</td>";
        echo "<td>" . $getallen[$i] . "</td>";
      }
      echo "</table>";

      rsort($getallen);

      echo "Dit kan" . (($getallen[1]+$getallen[2] > $getallen[0])? "":" nooit") . " een driehoek vormen";
    ?>
  </body>
</html>
