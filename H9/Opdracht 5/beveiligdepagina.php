<?php
  session_start();
  try{
    include("../include/conn.php");

    if(isset($_POST['uitloggen'])){
      $_SESSION['ingelogd'] = false;
      $_SESSION['gebruiker'] = "";
    }

    include("check.php");

    if($ingelogd){
      $gebruiker = $_SESSION['gebruiker'];
      echo "Welkom $gebruiker!<br>";
?>

<form class="" action="" method="post">
  <button type="submit" name="uitloggen">Log uit</button>
</form>

<?php
    }
  }
  catch(Exception $e){
    //
  }
?>
