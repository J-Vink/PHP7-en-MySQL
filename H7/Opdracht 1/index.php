<?php
  session_start();

  if (isset($_POST['verstuur'])) {
    if(is_numeric($_POST['bedrag'])){
      $bedrag = $_POST['bedrag'];
      $btw = $_POST['btw'];
    }
    else{
      echo "U heeft geen numerieke waarde ingevoerd!";
    }
  }
  else{
    $bedrag = "";
    $btw = "";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <label>Bedrag exclusief BTW</label>
      <input type="text" name="bedrag" value="<?php echo $bedrag; ?>"><br>

      <input type="radio" name="btw" value="6" <?php if($btw==6){echo "checked='checked'";} ?>>Laag, 6%</input><br>
      <input type="radio" name="btw" value="21" <?php if($btw==21){echo "checked='checked'";} ?>>hoog, 21%</input><br>

      <button type="submit" name="verstuur">Verstuur</button>
      <br><br>
    </form>

    <?php
      if(isset($_POST['verstuur']) && $bedrag != 0){
        echo "Bedrag inclusief $btw% BTW: €" . ($bedrag + number_format(($bedrag*($btw/100)), 2, ',', '.'));
      }
    ?>
  </body>
</html>
