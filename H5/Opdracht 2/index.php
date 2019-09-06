<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $resultaat = 4;
    $tussenGetal = 1;
    $deler = 3;
    for ($i=0; $i < 10000; $i++) {
      if($i % 2 == 0){
        $tussenGetal = $tussenGetal + (1 / $deler);
      }
      else{
        $tussenGetal = $tussenGetal - (1 / $deler);
      }
      $deler += 2;
    }
    $resultaat = $resultaat*$tussenGetal;
    echo "$resultaat";
    ?>
  </body>
</html>
