<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $e = 2.718281828459;
    $uitkomst = 0.0;
    $n = 0.0;
    while($uitkomst != $e){
      $uitkomst = pow((1 + (1 / $n)), $n);
      if($uitkomst != $e){
        $n += 1;
      }
      else if($uitkomst == $e){
        echo "De uitkomst van e bij n is: $n <br>";
        echo "Dus: (1 + (1/$n)^$n) = $uitkomst...";
      }
    }
    ?>
  </body>
</html>
