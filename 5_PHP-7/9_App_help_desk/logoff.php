<?php
    session_start();

    //remover indices do array de sessão
    //unset() => remove o item apenas se existir

    //destruir a variavel de sessão
    //session_destroy()

    print_r($_SESSION);
    session_destroy();
    //forçar um redirecionamento
    header('Location: index.php');
?>