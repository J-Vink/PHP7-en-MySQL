<?php
  include("../include/conn3.php");

  try{
    if(isset($_POST['verstuur'])){
      $naam = $_POST['naam'];
      $bericht = $_POST['bericht'];

      $query = $db->prepare("INSERT INTO berichten(naam, bericht) VALUES(:naam, :bericht)");
      $query->bindParam("naam", $naam);
      $query->bindParam("bericht", $bericht);

      if($query->execute()){
        echo "Bericht is met succes geplaatst!";
      }
      else{
        die("Er is iets fout gegaan!");
      }
    }
  }
  catch(PDOException $e){
    die($e->getMessage());
  }
  catch(Exception $e){
    die($e->getMessage());
  }

?>

<form class="" action="" method="post">
  <label>Naam</label>
  <input type="text" name="naam"><br>

  <label>Bericht</label>
  <textarea name="bericht"></textarea><br>

  <button type="submit" name="verstuur" value="verstuur">Opslaan</button>
</form>
<?php
  try{
    $query = $db->prepare("SELECT * FROM berichten");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    foreach ($result as $data) {
      echo "<tr>";
      echo "<td>" . $data['naam'] . " - </td>";
      echo "<td>" . $data['datumtijd'] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . $data['bericht'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
  catch(PDOException $e){
    echo "Error: " . $e->getMessage();
  }
?>
