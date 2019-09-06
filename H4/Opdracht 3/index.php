<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $value1 = 22;
      $value2 = 12;

      $highestNumber = array();
      switch ($value1 <=> $value2) {
        case -1:
          $highestNumber[0] = $value2; $highestNumber[1] = $value1;
          break;
        case 0:
          $highestNumber[0] = $value1; $highestNumber[1] = $value1;
          break;
        case 1:
          $highestNumber[0] = $value1; $highestNumber[1] = $value2;
          break;

        default:
          echo "Er is iets misgegaan met de berekening!";
      }

      $result = $highestNumber[0]*2 + $highestNumber[1];

      echo "Uitkomst: $result";
    ?>
  </body>
</html>
