<?php
  session_start();

  if(isset($_POST['verstuur'])){
    $kleur = $_POST['kleur'];
  }
  else{
    $kleur = "";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
      body{
        background-color: <?php if(isset($_POST['verstuur']) && ($_POST['kleur'] != "")){echo $kleur;} ?>;
      }
    </style>
  </head>
  <body>

    <form action="" method="post">
      <input type="radio" name="kleur" value="red" <?php if($kleur == "red"){echo "checked='checked'";} ?>>Rood
      <input type="radio" name="kleur" value="green" <?php if($kleur == "green"){echo "checked='checked'";} ?>>Groen
      <input type="radio" name="kleur" value="blue" <?php if($kleur == "blue"){echo "checked='checked'";} ?>>Blauw
      <input type="radio" name="kleur" value="pink" <?php if($kleur == "pink"){echo "checked='checked'";} ?>>Roze<br>

      <button type="submit" name="verstuur">Verstuur</button>
    </form>

    <?php

    ?>
  </body>
</html>
