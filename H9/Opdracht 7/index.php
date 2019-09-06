<?php
  session_start();
  try{
    include("../include/conn3.php");

    if(isset($_POST['verstuur'])){
      $optie = $_POST['optie'];

      $query = $db->prepare("SELECT * FROM optie WHERE id = :optie");
      $query->bindParam("optie", $optie);
      $query->execute();
      $result = $query->fetchAll(PDO::FETCH_ASSOC);

      $waarde = ($result[0]['stemmen']);
      $waarde += 1;

      $response = $db->prepare("UPDATE optie SET stemmen = :stemmen WHERE id = :id");
      $response->bindParam("stemmen", $waarde);
      $response->bindParam("id", $optie);
      if($response->execute()){
        echo "Succesvol aangepast!";
      }
      else{
        die("Er is iets misgegaan!");
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
    <?php
      $query1 = $db->prepare("SELECT * FROM poll");
      $query2 = $db->prepare("SELECT * FROM optie");
      $query1->execute();
      $query2->execute();
      $polls = $query1->fetchAll(PDO::FETCH_ASSOC);
      $opties = $query2->fetchAll(PDO::FETCH_ASSOC);

      foreach ($polls as $poll) {
        echo "<b><p>" . $poll['vraag'] . "</p></b>";
    ?>
    <form class="" action="" method="post">
      <table>
        <?php
          foreach ($opties as $optie) {
            if($optie['poll'] == $poll['id']){ ?>
              <tr>
                <td><?php echo "<input type='radio' name='optie' value='" . $optie['id'] . "'>" . $optie['optie']; ?></td>
              </tr>
              <?php
            }
          }
        ?>
        <tr>
          <td><button type="submit" name="verstuur" value="verstuur">Verstuur</button></td>
        </tr>
      </table>
    </form>
    <?php
      }
    ?>
  </body>
</html>
