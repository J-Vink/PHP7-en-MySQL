<?php
  session_start();

  if(isset($_POST['verstuur'])){
    $prijs = $_POST['prijs'];
    $korting = $_POST['korting'];
  }
  else{
    $prijs = "";
    $korting = "";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <label>Prijs</label>
      <input type="number" name="prijs" value="<?php if($prijs != ""){echo $prijs;} ?>"><br>

      <label>Korting(%)</label>
      <input type="number" name="korting" value="<?php if($korting != ""){echo $korting;} ?>"><br>

      <button type="submit" name="verstuur">Verstuur</button>
    </form>
    <?php
      if(isset($_POST['verstuur']) && $korting < 100){
        echo "Bedrag inclusief $korting% korting: €" . number_format(($prijs * (1-($korting/100))), 2, ',', '.');
      }
    ?>
  </body>
</html>
