<?php
  session_start();
  try{
    include("../include/conn.php");
    
    if(isset($_POST['inloggen'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      $query = $db->prepare("SELECT * FROM gebruikers WHERE username = :username AND password = :password");
      $query->bindParam("username", $username);
      $query->bindParam("password", sha1($password));
      $query->execute();

      if($query->rowCount() == 1){
        $_SESSION['ingelogd'] = true;
        $_SESSION['gebruiker'] = $username;
        echo "Welkom, gebruiker!";
      }
      else{
        $_SESSION['ingelogd'] = false;
        echo "Onjuiste gegevens!";
      }
    }
    include("check.php");
  }
  catch(PDOException $e){
    echo "Error: " . $e->getMessage();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <table>
        <tr>
          <td><label>Gebruikersnaam:</label></td>
          <td><input type="text" name="username" value="<?php if(isset($_POST['username'])){echo $username;} ?>"></td>
        </tr>
        <tr>
          <td><label>Wachtwoord:</label></td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td><button type="submit" name="inloggen" value="inloggen">Log in</button></td>
        </tr>
      </table><br>
      <a href="register.php">Registreer hier</a>
    </form>
  </body>
</html>
