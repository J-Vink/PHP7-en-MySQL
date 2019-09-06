<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <?php
      $euro = 1;
      $dollar = 1.12651;
      $pond = 0.79494;
      $yen = 119.524;
      $roepi = 75.559;

      echo "<table>";
        echo "<tr>";
        echo "<td><b>Euro</td>";
        echo "<td><b>Amerikaanse dollar</b></td>";
        echo "<td><b>Britse pond</b></td>";
        echo "<td><b>Japanse Yen</b></td>";
        echo "<td><b>Indiase Roepi</b></td>";
        echo "<tr>";
      for($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>" . ($euro*$i) . "</td>";
        echo "<td>" . ($euro*$i)*$dollar . "</td>";
        echo "<td>" . ($euro*$i)*$pond . "</td>";
        echo "<td>" . ($euro*$i)*$yen . "</td>";
        echo "<td>" . ($euro*$i)*$roepi . "</td>";
        echo "<tr>";
      }
      echo "</table>";
    ?>
  </body>
</html>
