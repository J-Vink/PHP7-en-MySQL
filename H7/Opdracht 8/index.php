<?php
  session_start();

  $methode = $_POST['verstuur'];
  $thisFruit = $_POST['fruit'];

  if($methode == "toevoegen"){
    array_push($fruits, $thisFruit);
  }
  if($methode == "sort"){
    sort($fruits);
  }
  if($methode == "shuffle"){
    shuffle($fruits);
  }
  if(isset($fruits) == false){
    $fruits = array();
    echo "<br>Nieuwe array aangemaakt.";
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
    <label>Fruitsoort: </label>
    <input type="text" name="fruit" value=""><br>
    <button type="submit" name="verstuur" value="toevoegen">Toevoegen</button><br>
    <br>
    <hr width="300px">
    <button type="submit" name="verstuur" value="sort">Sorteren</button>
    <button type="submit" name="verstuur" value="shuffle">Shuffle</button><br>
    <hr width="300px">
  </form>
    <?php
      if(isset($_POST['verstuur'])){
        echo "Inhoud van de array:<br>";
        echo $_POST['verstuur'] . "<br>";

        foreach($fruits as $fruit) {
          echo $fruit;
        }
      }
    ?>
  </body>
</html>
