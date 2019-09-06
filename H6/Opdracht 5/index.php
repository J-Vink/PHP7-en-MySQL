<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function berekenSnelheid($s, $a = 5.5):float {
        return sqrt((2 * $a * $s))*3.6;
      }

      $remspoor = 50;
      echo "Snelheid van een auto met remspoor van $remspoor is: " . berekenSnelheid($remspoor) . "km/u";
    ?>
  </body>
</html>
