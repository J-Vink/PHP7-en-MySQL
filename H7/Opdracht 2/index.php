<?php
  session_start();

  if (isset($_POST['verstuur'])) {
    $getal1 = $_POST['getal1'];
    $getal2 = $_POST['getal2'];
    $rekenfunctie = $_POST['rekenfunctie'];
  }
  else{
    $getal1 = "";
    $getal2 = "";
    $rekenfunctie = "+";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <label>Getal 1</label>
      <input type="text" name="getal1" value="<?php if(isset($_POST['getal1'])){echo $getal1;} ?>"><br>

      <input type="radio" name="rekenfunctie" value="+" <?php if($rekenfunctie == "+"){echo "checked='checked'";} ?>>Optellen
      <input type="radio" name="rekenfunctie" value="-" <?php if($rekenfunctie == "-"){echo "checked='checked'";} ?>>Aftrekken
      <input type="radio" name="rekenfunctie" value="*" <?php if($rekenfunctie == "*"){echo "checked='checked'";} ?>>Vermenigvuldigen
      <input type="radio" name="rekenfunctie" value="/" <?php if($rekenfunctie == "/"){echo "checked='checked'";} ?>>Delen<br>

      <label>Getal 2</label>
      <input type="text" name="getal2" value="<?php if(isset($_POST['getal2'])){echo $getal2;} ?>"><br>

      <button type="submit" name="verstuur">Verstuur</button>
    </form><br><br>
    <?php
      if(isset($_POST['verstuur'])){
        echo "$getal1 $rekenfunctie $getal2 = " . berekenTotaal($getal1, $rekenfunctie, $getal2);
      }

      function berekenTotaal($getal1, $rekenfunctie, $getal2):float {
        switch ($rekenfunctie) {
          case '+':
            return ($getal1 + $getal2);
            break;
          case '-':
            return ($getal1 - $getal2);
            break;
          case '*':
            return ($getal1 * $getal2);
            break;
          case '/':
            return ($getal1 / $getal2);
            break;

          default:
            return 0;
            break;
        }
      }
    ?>
  </body>
</html>
