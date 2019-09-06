<link rel="stylesheet" href="../Opdracht 1/css/style.css">
<?php
  try{
    include("../conn.php");

    if(isset($_GET['id'])){
      $query = $db->prepare("SELECT * FROM fietsen WHERE id = :id");
      $query->bindParam("id", $_GET['id']);
      $query->execute();
      $result = $query->fetchAll(PDO::FETCH_ASSOC);

      echo "<table>";
      foreach ($result as $data) {
        echo "<tr>";
        echo "<td>" . $data['id'] . "</td>";
        echo "<td>" . $data['merk'] . "</td>";
        echo "<td>" . $data['type'] . "</td>";
        echo "<td align='right'>&euro; " . number_format($data['prijs'], 2, ',', '.') . "</td>";
        echo "</tr>";
      }
      echo "</table>";
      echo "<a href='index.php'>Terug naar de hoofdpagina</a>";
    }
  }
  catch(PDOException $e){
    echo "Error: " . $e->getMessage();
  }
?>
