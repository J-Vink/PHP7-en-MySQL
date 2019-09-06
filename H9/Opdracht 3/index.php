<link rel="stylesheet" href="css/style.css">
<?php
  try{
    include("../include/conn2.php");

    $query = $db->prepare("SELECT * FROM studenten");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
      echo "<tr>";
      echo "<td><b>Leerling</b></td>";
      echo "<td><b>Cijfer</b></td>";
      echo "</tr>";
    foreach ($result as $data) {
      echo "<tr>";
      echo "<td>" . $data['leerling'] . "</td>";
      echo "<td>" . number_format($data['cijfer'], 1, ',', '.') . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
  catch(PDOException $e){
    echo "Error: " . $e->getMessage();
  }
?>
