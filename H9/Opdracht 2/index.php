<?php
  try{
    include("../include/conn.php");

    $query = $db->prepare("SELECT * FROM fietsen");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $data) {
      echo "<a href='product.php?id=" . $data['id'] . "'>" . $data['merk'] . " " . $data['type'] . "</a><br>";
    }
  }
  catch(PDOException $e){
    echo "Error: " . $e->getMessage();
  }
?>
