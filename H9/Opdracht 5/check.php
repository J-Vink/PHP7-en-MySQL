<?php
  $file = basename($_SERVER['PHP_SELF']);

  if(isset($_SESSION['ingelogd'])){
    $ingelogd = $_SESSION['ingelogd'];

    if($ingelogd && $file != "beveiligdepagina.php"){
      header('Location: beveiligdepagina.php');
      echo "Naar beveiligdepagina";
    }
    elseif(!$ingelogd && $file != "index.php"){
      header('Location: index.php');
      echo "Naar index";
    }
  }
  else{
    $_SESSION['ingelogd'] = false;
    if($file != "index.php"){
      header("Location: index.php");
    }
    echo $_SESSION['ingelogd'];
  }
?>
