<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $getal = 12;
      $totaal = 0;

      echo "Waarde van variabele \$getal is: $getal";
      echo "<br><br>";
      echo "Optelling is als volgt:<br>";

      for ($i=0; $i <= $getal; $i++) {
        echo "$i" . (($i == $getal)? " ":" + ");
        $totaal = $totaal + $i;
      }
      echo "= $totaal";
    ?>
  </body>
</html>
