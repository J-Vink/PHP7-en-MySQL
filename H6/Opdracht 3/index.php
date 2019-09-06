<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "Een willekeurige postcode is: " . rand(1000, 9999) . " " . chr(rand(65,90)) . chr(rand(65,90));
    ?>
  </body>
</html>
