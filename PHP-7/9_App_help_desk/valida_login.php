<?php
    $user = $_POST['email'];
    $pass = $_POST['senha'];
    $usuario_autenticado = false;

    // usuarios do sistema
    $usuarios_app = [
        ['email' => 'adm@teste.com.br', 'senha' => '123456'],
        ['email' => 'user@teste.com.br', 'senha' => 'abcd']
    ];

    foreach($usuarios_app as $usuario) {
        if($usuario['email'] === $user && $usuario['senha'] === $pass) {
            $usuario_autenticado = true;
        }
    }
    
    if($usuario_autenticado) {
        echo 'Usuário autenticado';
    } else {
        header('Location: index.php?login=erro');
    }
?>