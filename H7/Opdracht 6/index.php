<?php
  session_start();

  if(isset($_POST['verstuur'])){
    $startkapitaal = $_POST['startkapitaal'];
    $rentepercentage = $_POST['rentepercentage'];
    $jaarlijkseOpname = $_POST['jaarlijkseOpname'];
  }
  else{
    $startkapitaal = "";
    $rentepercentage = "";
    $jaarlijkseOpname = "";
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
      <label>Startkapitaal</label>
      <input type="number" name="startkapitaal" value="<?php if($startkapitaal != ""){echo $startkapitaal;} ?>"><br>

      <label>Rentepercentage</label>
      <input type="number" name="rentepercentage" value="<?php if($rentepercentage != ""){echo $rentepercentage;} ?>"><br>

      <label>Jaarlijke opname</label>
      <input type="number" name="jaarlijkseOpname" value="<?php if($jaarlijkseOpname != ""){echo $jaarlijkseOpname;} ?>"><br>

      <button type="submit" name="verstuur">Bereken</button>
    </form><br><br>
    <?php
      if(isset($_POST['verstuur'])){
        $procent = 1+($rentepercentage/100);
        $aantalJaren = 0;
        for ($i=$startkapitaal; $i > 0 && $aantalJaren < 100; $aantalJaren++) {
          $i = ($i*$procent) - $jaarlijkseOpname;
        }
        if($aantalJaren == 100){
          echo "Je kunt er je hele leven mee doen!";
        }
        else{
          echo "Je kunt er $aantalJaren jaar mee doen voordat het geld op is!";
        }
      }
    ?>
  </body>
</html>
