<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $hourOfDay = date("G");

      if($hourOfDay < 6){
        echo "Het is nacht";
      }
      else if($hourOfDay >= 6 && $hourOfDay < 12){
        echo "Het is ochtend";
      }
      else if($hourOfDay >= 12 && $hourOfDay < 18){
        echo "Het is middag";
      }
      else{
        echo "Het is avond";
      }
    ?>
  </body>
</html>
