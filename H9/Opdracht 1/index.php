<link rel="stylesheet" href="css/style.css">

<?php
  include("../include/conn.php");

  $query = $db->prepare("SELECT * FROM fietsen");
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);

  echo "<table>";
  foreach ($result as $data) {
    echo "<tr>";
    echo "<td>" . $data['merk'] . "</td>";
    echo "<td>" . $data['type'] . "</td>";
    echo "<td align='right'>&euro; " . number_format($data['prijs'], 2, ',', '.') . "</td>";
    echo "</tr>";
  }
  echo "</table>";
?>
