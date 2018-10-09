<?php

$configs = __DIR__ . '/../config.php';

if(file_exists($configs)) {
  $configs = include($configs);
  $title = "KK's T||F DB";
  
  try {
    $pdo = new PDO("mysql:host={$configs['host']};dbname={$configs['dbname']};charset=utf8", $configs['username'], $configs['pwd']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT `torf` FROM `torfs`';
    $result = $pdo->query($sql);
    
    while($row = $result->fetch()) {
      $torfs[] = $row['torf'];
    }

    $output = '';

    foreach($torfs as $torf) {
      $output .= '<blockquote>';
      $output .= '<p>';
      $output .= $torf;
      $output .= '</p>';
      $output .= '</blockquote>';
    }
  } catch(PDOException $e) {
    $title = "An error has occurred";

    $output = 'Database error: '
      .$e->getMessage() . ' in '
      .$e->getFile() . ':' 
      .$e->getLine();
  }

  include  __DIR__ . '/../templates/welcome.php';

  $pdo = null; // disconnect from the database server
} else 
  die('Config file unavailable');
