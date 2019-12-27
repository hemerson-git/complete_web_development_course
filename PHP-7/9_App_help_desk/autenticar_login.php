<?php
    session_start();

    $usuarios_cadastrados = [
        ['user' => 'admin@teste.com', 'pass' => '123456'],
        ['user' => 'user@teste.com', 'pass' => 'asdfjklç']
    ];

    $user = $_POST['email'];
    $pass = $_POST['password'];
    $user_autenticado = false;

    foreach ($usuarios_cadastrados as $usuario) {
        if($usuario['user'] === $user && $usuario['pass'] === $pass) {
            $user_autenticado = true;
        }
    }
    
    if($user_autenticado) {
        echo 'usuario autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    } else {
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NAO';
    }
    
?>