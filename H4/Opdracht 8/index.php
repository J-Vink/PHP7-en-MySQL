<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $leeftijd = 25;
      $legaal = false;

      if($leeftijd < 16){
        echo "Je mag geen praktijkexamenvoor je scooterrijbewijs doen.<br>";
      }
      else{
        echo "Je mag praktijkexamenvoor je scooterrijbewijs doen.<br>";
        if($leeftijd >= 18 && $legaal == true){
          echo "Je mag wel stemmen, want je bent 18 jaar of ouder en legaal.";
        }
        elseif($legaal == false){
          echo "Je mag niet stemmen, want je bent illegaal.";
        }
        else{
          echo "Je mag niet stemmen, want je bent nog geen 18 jaar oud.";
        }
      }


    ?>
  </body>
</html>
