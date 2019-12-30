<?php
    session_start();
    
    $textos = $_POST;
    $textos[] = $_SESSION['user_id']; 

    $new_texto = null;
    $cont = 1;
    
    //tratativas
    foreach ($textos as $item) {
        $item = str_replace('#', '-', $item);
        if($cont < count($textos) && $cont != 1) {
            $new_texto = "$new_texto#$item";
        } elseif($cont == 1) {
            $new_texto = "$new_texto$item";
        } else {
            $new_texto = "$new_texto#$item" . PHP_EOL;
        }
        $cont++;
    }

    //abrindo arquivo
    $arquivo = fopen('arquivo.hd', 'a');

    //escrevendo o texto
    fwrite($arquivo, $new_texto);

    //fechando o arquivo
    fclose($arquivo);
    header('Location: abrir_chamado.php');
?>