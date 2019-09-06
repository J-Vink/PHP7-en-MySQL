<?php
  session_start();
  if(isset($_SESSION['aantalBezoeken'])){
    $_SESSION['aantalBezoeken']++;
    echo "Deze pagina heb je al: " . $_SESSION['aantalBezoeken'] . " keer bekeken<br>voordat je de internet browser hebt afgesloten.";
  }
  else{
    $_SESSION['aantalBezoeken'] = 1;
    echo "Dit is de eerste keer in deze sessie dat je de pagina hebt bekeken.";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    ?>
  </body>
</html>
