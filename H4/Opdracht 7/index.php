<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $scooterKosten = 1500;
      $spaargeld = 1800;

      switch (true) {
        case $scooterKosten - $spaargeld > 500:
          echo "Je spaargeld is nu: $spaargeld euro, je komt dus " . ($scooterKosten-$spaargeld) .
            " euro te kort! Je kan beter nog even een baantje gaan zoeken.";
          break;
        case ($scooterKosten - $spaargeld < 500) && ($spaargeld<$scooterKosten):
          echo "Je spaargeld is nu: $spaargeld euro, je bent er bijna! Maar je komt nog " . ($scooterKosten-$spaargeld) .
            " euro te kort!";
          break;

        default:
            echo "Je spaargeld is nu: $spaargeld euro, hiermee is het mogelijk om de scooter te kopen!
              Je hebt nog " . ($spaargeld-$scooterKosten) . " over voor de benzine.";
          break;
      }
    ?>
  </body>
</html>
