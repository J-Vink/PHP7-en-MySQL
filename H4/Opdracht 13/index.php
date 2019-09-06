<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <?php
      $mile = 1;
      $kilometer = 1.609;

      echo "<table>";
        echo "<tr>";
        echo "<td><b>Miles</b></td>";
        echo "<td><b>Kilometers</b></td>";
        echo "<tr>";
      for($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>" . ($mile*$i) . "</td>";
        echo "<td>" . ($mile*$i)*$kilometer . "</td>";
        echo "<tr>";
      }
      echo "</table>";
    ?>
  </body>
</html>
