<?php
  session_start();

  if(isset($_POST['verstuur'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
  }
  else{
    $a = "";
    $b = "";
    $c = "";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>ABC-formule</p>
    <form method="post" action="">
      <input type="number" name="a" value="<?php if($a != ""){echo $a;} ?>">x<sup>2</sup> +
      <input type="number" name="b" value="<?php if($b != ""){echo $b;} ?>">x +
      <input type="number" name="c" value="<?php if($c != ""){echo $c;} ?>"> = 0<br>

      <button type="submit" name="verstuur">Bereken</button>
    </form>
    <?php
      if(isset($_POST['verstuur'])){
        $d = (pow($b, 2) - (4 * $a * $c));
        $x1 = ((-$b+sqrt($d))/(2*$a));
        $x2 = ((-$b-sqrt($d))/(2*$a));

        echo "x<sub>1</sub> = $x1<br>";
        echo "x<sub>2</sub> = $x2";
      }
    ?>
  </body>
</html>
