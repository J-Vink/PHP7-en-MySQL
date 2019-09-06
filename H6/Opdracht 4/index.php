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
      function berekenOmtrek($diameter):float {
        return 2 * pi() * ($diameter/2);
      }

      function berekenOppervlakte($diameter):float {
        return pi() * pow($diameter/2, 2);
      }

      echo berekenOmtrek(10);
      echo "<br>";
      echo berekenOppervlakte(10);
    ?>
  </body>
</html>
