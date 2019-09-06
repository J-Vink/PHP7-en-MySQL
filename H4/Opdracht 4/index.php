<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $orPrice = 100;
      $newPrice = 0;
      $percentage = 0;

      switch (true) {
        case $orPrice > 150: $percentage = 19;
          break;
        case $orPrice < 55: $percentage = 11;
          break;

        default: $percentage = 16;
          break;
      }

      $newPrice = $orPrice * ($percentage/100 + 1);

      echo "Oude prijs: €$orPrice. Na verhoging van $percentage% is de prijs: €$newPrice.";
    ?>
  </body>
</html>
