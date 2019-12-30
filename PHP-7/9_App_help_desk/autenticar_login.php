<?php
    session_start();
    $user_perfil = null;
    $user_ID = null;

    //tipos de usuarios
    $perfis = [1 => 'Administrativo', 'Usuário'];

    //usuarios do sistema
    $usuarios_cadastrados = [
        ['id' => 1, 'user' => 'user@teste.com', 'pass' => '1234', 'perfil_id' => $perfis[1]],
        ['id' => 2, 'user' => 'admin@teste.com', 'pass' => '1234', 'perfil_id' => $perfis[1]],
        ['id' => 3, 'user' => 'maria@teste.com', 'pass' => '1234', 'perfil_id' => $perfis[2]],
        ['id' => 4, 'user' => 'jose@teste.com', 'pass' => '1234', 'perfil_id' => $perfis[2]]
    ];


    $user = $_POST['email'];
    $pass = $_POST['password'];
    $user_autenticado = false;

    foreach ($usuarios_cadastrados as $usuario) {
        if($usuario['user'] === $user && $usuario['pass'] === $pass) {
            $user_autenticado = true;
            $user_ID = $usuario['id'];
            $user_perfil = $usuario['perfil_id'];
        }
    }

    //Verifica se o usuário está de fato logado
    if($user_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['user_id'] = $user_ID;
        $_SESSION['perfil_id'] = $user_perfil;
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
    
?>