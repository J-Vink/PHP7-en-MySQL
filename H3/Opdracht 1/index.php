<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      date_default_timezone_set("Europe/Amsterdam");

      // Laat vandaag zien
      $today = date("l j F Y");
      echo "Het is vandaag $today" . "<br>";

      // Laat dag van het jaar zien
      $dayOfYear = date("z");
      echo "Vandaag is het de $dayOfYear" . "e dag van het jaar" . "<br>";

      // Laat de dag en het dagnummer van de week zien
      $dayOfWeek = date("l");
      $dayNrOfWeek = date("w");
      if($dayNrOfWeek == 0){
        $dayNrOfWeek = 7;
      }
      echo "$dayOfWeek is de $dayNrOfWeek" . "e dag van de week<br>";

      // Laat de huidige maand en het daarin aantal dagen zien
      $monthOfYear = date("F");
      $daysInMonth = date("t");
      if(date("L") > 0 && $monthOfYear == "February"){
        $daysInMonth = 29;
      }
      echo "De maand $monthOfYear heeft in totaal $daysInMonth dagen<br>";

      // Toont het jaar en of het wel of geen schrikkeljaar is
      $year = date("Y");
      $leapYear = (date("L") == 1)? "een":"geen";
      echo "Het jaar $year is $leapYear schrikkeljaar";
    ?>
  </body>
</html>
