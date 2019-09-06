<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $dividers = array();
      $dividers = [5, 6];

      $number = 30;

      $counter = 0;

      echo "Het getal $number<br>";
      foreach ($dividers as $divider) {
        echo (($number%$divider == 0)? "wel":"niet") . " deelbaar door $divider";
        echo ($counter<1)? " en ":"";
        $counter++;
      }
    ?>
  </body>
</html>
