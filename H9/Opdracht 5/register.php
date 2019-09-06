<?php
  try{
    include("../include/conn.php");

    if(isset($_POST['registreer'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      $query = $db->prepare("INSERT INTO gebruikers(username, password) VALUES(:username, :password)");
      $query->bindParam("username", $username);
      $query->bindParam("password", sha1($password));

      if($query->execute()){
        echo "Uw account is aangemaakt!<br>";
      }
      else{
        die("Er is een fout opgetreden!<br>");
      }
    }
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
          <td><input type="text" name="username" value=""></td>
        </tr>
        <tr>
          <td><label>Wachtwoord:</label></td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td><button type="submit" name="registreer" value="registreer">Registreer</button></td>
        </tr>
      </table><br>
      <a href="index.php">Log in</a>
    </form>
  </body>
</html>
