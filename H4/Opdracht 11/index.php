<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $getal = 5;
      $totaal = 1;

      echo "De faculteit van $getal is ";

      while($getal>0){
        $totaal = $totaal*$getal;
        $getal--;
      }

      echo "$totaal";
    ?>
  </body>
</html>
