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

    $query = '
        select * from tb_usuarios where id = 5
    ';
    
    $select = $connection->query($query);
    $users = $select->fetch(PDO::FETCH_ASSOC);

    //FETCH_NUM => Array de Índice númerico
    //FETCH_ASSOC => Array de Índices Associativos
    //FETCH_OBJ => Retorna em formato de objeto
    
    echo '<pre>';
        print_r($users);
    echo '</pre>';
    
    echo $retorno;
    
  } catch (PDOException $e) {
    echo 'Não foi possível se conectar ao Banco de dados!!';
    echo 'Erro:' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
  }
  
?>
