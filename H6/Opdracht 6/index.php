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
      $conversionRate = 0.900909017;
      function dollarNaarEuro($dollar):void {
        global $conversionRate;
        $euro = $dollar * $conversionRate;

        echo "\$$dollar is gelijk aan €" . number_format($euro, 2, ',', '.');
      }

      dollarNaarEuro(86.74);
    ?>
  </body>
</html>
