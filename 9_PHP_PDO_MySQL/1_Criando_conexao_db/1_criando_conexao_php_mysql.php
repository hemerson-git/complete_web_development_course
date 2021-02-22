<?php
  ini_set('display_errors', true);

  $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
  $user = 'developer';
  $pass = 'develpment';

    $connection = new PDO($dsn, $user, $pass);
?>
