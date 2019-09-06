<?php
  session_start();
  if(isset($_SESSION['aantalBezoeken'])){
    $_SESSION['aantalBezoeken']++;
    echo "Deze pagina heb je al: " . $_SESSION['aantalBezoeken'] . " keer bekeken voordat je de internet browser hebt afgesloten.<br>";
  }
  else{
    $_SESSION['aantalBezoeken'] = 1;
    echo "Dit is de eerste keer in deze sessie dat je de pagina hebt bekeken.<br>";
  }
  if(isset($_COOKIE['aantalBezoekenC'])){
    $_COOKIE['aantalBezoekenC']++;
    echo "Deze pagina heb je al: " . $_COOKIE['aantalBezoeken'] . " keer bekeken.<br>";
  }
  else{
    setcookie("aantalBezoekenC", "", time() + 3600);
    echo "Dit is de eerste keer dat je de pagina hebt bezocht.<br>";
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
