<?php
  ini_set('display_errors', true);

  $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
  $user = 'developer';
  $pass = 'develpment';

  try {
    $connection = new PDO($dsn, $user, $pass);
    
    $query = '
      create table tb_usuarios (
        id int not null primary key auto_increment,
        nome varchar(50) not null,
        email varchar(100) not null,
        senha varchar(32) not null
      )
    ';

    $retorno = $connection->exec($query);

    echo $retorno;
    
  } catch (PDOException $e) {
    echo 'Não foi possível se conectar ao Banco de dados!!';
    echo 'Erro:' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
  }
  
?>
