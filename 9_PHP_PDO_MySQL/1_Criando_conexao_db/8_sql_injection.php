<?php
  ini_set('display_error', true);

  $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
  $user = 'developer';
  $pass = 'develpment';

  if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    try {
      $connection = new PDO($dsn, $user, $pass);

      //query

      $query = "select * from tb_usuarios where ";
      $query .= " email = :email ";
      $query .= "AND senha = :pass";

      $stmt = $connection->prepare($query);

      // bindValue(':variavel', 'valor', 'opicional=> tipo dos dados');
      
      $stmt->bindValue(':email', $_POST['email']);
      $stmt->bindValue(':pass', $_POST['pass']);

      $stmt->execute();

      $user = $stmt->fetch(PDO::FETCH_ASSOC);

      echo '<pre>';
      print_r($user);
      echo '</pre>';
      
    } catch (PDOException $e) {
      echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
      echo '<br/>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous"
  >
</head>

<body>

  <div class="container">
    <div class="display-4 text-center my-4">Failbook</div>

    <form action="8_sql_injection.php" class="form" method="POST">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6">
            <label for="email">Email: </label>
            <input type="text" class="form-control" id="email" name="email" placeholder="joao@dominio.com">
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 mt-3">
            <!-- Por Enquanto, um usuário pode injetar um comando sql através dos nossos campos 
              Ex: 123456; delete * from tb_usuarios where 'a' = 'a
            -->
          
            <label for="pass">Senha: </label>
            <input type="password" id="pass" name="pass" class="form-control" placeholder="Senha">
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-info">Fazer login</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>
