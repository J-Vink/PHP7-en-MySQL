<?php
  $settings = parse_ini_file('dbc.ini', TRUE);
  
  $db = new PDO($settings['database']['driver'] . ":host=" .
    $settings['database']['host'] . ";dbname=" . $settings['database']['schema'],
    $settings['database']['username'], $settings['database']['password']);
?>
