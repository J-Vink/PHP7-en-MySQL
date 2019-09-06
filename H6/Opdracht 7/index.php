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
      function berekenDerdeMacht($getal):void {
        echo "$getal x $getal x $getal = " . pow($getal, 3) . "<hr>";
      }

      berekenDerdeMacht(5);

      function berekenDerdeMachten():void {
        for ($i=1; $i <= 25; $i++) {
          echo "$i x $i x $i = " . pow($i, 3) . "<br>";
        }
      }

      berekenDerdeMachten();
    ?>
  </body>
</html>
