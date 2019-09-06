<?php
  session_start();

  if(isset($_POST['verstuur'])){
    $aanhef = $_POST['aanhef'];
    $naam = $_POST['naam'];
    $bericht = $_POST['bericht'];

    echo "Het formulier is verzonden!<br>";
    echo "Naam: " . ucfirst($aanhef) . " $naam<br>";
    echo "Bericht: $bericht<br><br><br>";
  }
  else{
    $aanhef = "";
    $naam = "";
    $bericht = "";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="">
      <label>Aanhef</label>
      <input type="radio" name="aanhef" value="dhr." <?php if($aanhef == "dhr."){echo "checked='checked'";} ?>>Dhr.
      <input type="radio" name="aanhef" value="mevr." <?php if($aanhef == "mevr."){echo "checked='checked'";} ?>>Mevr.<br>

      <label>Naam</label>
      <input type="text" name="naam" value="<?php echo $naam; ?>"><br>

      <label>Bericht</label>
      <textarea name="bericht"><?php echo $bericht; ?></textarea>
      <button type="submit" name="verstuur" value="Verstuur">Verstuur</button>
    </form>
    <?php
      $ontvanger = "jcavink94@gmail.com";
      $onderwerp = "Testing e-mail";
      $bericht = "Dit is een net opgezette test e-mail.";
      $header = "From:Jeffrey Vink<info@jeffreyvink.nl>";

      mail($ontvanger, $onderwerp, $bericht, $header);
    ?>
  </body>
</html>
