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
        insert into tb_usuarios(
          nome, email, senha
        ) values (
          "Hemerson Oliveira", "hemerson@gmail.com", "123456"
        )
    ';

    $retorno = $connection->exec($query);
    
    $query = '
        select * from tb_usuarios
    ';
    
    $select = $connection->query($query);
    $users = $select->fetchAll(PDO::FETCH_OBJ);

    //FETCH_NUM => Array de Índice númerico
    //FETCH_NAMED => Array de Índices Associativos
    //FETCH_OBJ => Retorna em formato de objeto
    
    echo '<pre>';
        print_r($users);
    echo '<;pre>';
    
    echo $retorno;
    
  } catch (PDOException $e) {
    echo 'Não foi possível se conectar ao Banco de dados!!';
    echo 'Erro:' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
  }
  
?>
