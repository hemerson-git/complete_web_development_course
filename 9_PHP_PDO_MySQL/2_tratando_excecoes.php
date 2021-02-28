<?php
  ini_set('display_errors', true);

  $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
  $user = 'developer';
  $pass = 'develpment';

  try {
    $connection = new PDO($dsn, $user, $pass);
    
  } catch (PDOException $e) {
    echo 'Não foi possível se conectar ao Banco de dados!!';
    echo 'Erro:' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
  }
  
?>
