<?php
  session_start();

  if(isset($_POST['verstuur'])){
    echo $_POST['verstuur'] . "<br>";
    $methode = $_POST['methode'];
    $tekst = $_POST['tekst'];
  }
  else if(isset($methode) == false){
    $methode = "";
    $tekst = "";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" target="">
      <label>Tekst: </label>
      <input type="text" name="tekst" value="<?php if(isset($_POST['verstuur'])){echo "$tekst";} ?>"><br>

      <input type="radio" name="methode" value="uc" <?php if($methode == "uc"){echo "checked='checked'";} ?>>In hoofdletters<br>
      <input type="radio" name="methode" value="lc" <?php if($methode == "lc"){echo "checked='checked'";} ?>>In kleine letters<br>
      <input type="radio" name="methode" value="ucfls" <?php if($methode == "ucfls"){echo "checked='checked'";} ?>>Eerste letter van zin hoofdletter<br>
      <input type="radio" name="methode" value="ucflw" <?php if($methode == "ucflw"){echo "checked='checked'";} ?>>Eerste letter van ieder woord hoofdletter<br>
      <br>
      <button type="submit" name="verstuur">Weergeven</button>
    </form>
    <?php
      if(isset($_POST['verstuur'])){
        echo "Originele tekst: $tekst <br>";
        if($methode == "uc"){
          echo strtoupper($tekst);
        }
        if($methode == "lc"){
          echo strtolower($tekst);
        }
        if($methode == "ucfls"){
          echo ucfirst($tekst);
        }
        if($methode == "ucflw"){
          echo ucwords($tekst);
        }
      }
    ?>
  </body>
</html>
