<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opdracht 2</title>
  </head>
  <body>
    <?php
      $hourOfDay = date("G");

      switch (true) {
        case $hourOfDay < 6:
          echo "Het is nacht";
          break;
        case $hourOfDay >= 6 && $hourOfDay < 12:
          echo "Het is ochtend";
          break;
        case $hourOfDay >= 12 && $hourOfDay < 18:
          echo "Het is middag";
          break;

        default:
          echo "Het is avond";
          break;
      }
    ?>
  </body>
</html>
