<?php
//tenha uma lógica 
    try {
        //tenha uma lógica caso haja possibilidade de erro
        echo '<h3>*** Try ***</h3>';
        // $sql = 'Select * from clientes';
        // mysql_query($sql);

        if(!file_exists('require_arquivo_a.php')) {
            throw new Exception('O Arquivo em questão em questão deveria estar disponível às ' . date('d/m/Y H:i:s') . ' mas não estava, vamos prosseguir mesmo assim.');
        }

    } catch (Error $e) {
        echo '<h3>***Catch***</h3>';
        echo $e;
    } catch (Exception $ex) {
        echo '<h3>***Catch da Exception***</h3>';
        echo '<p style="color: red;"' . $ex . '</p>';
        echo $ex;
    } finally {
        echo '<h3>***Finally***</h3>';
    }
?>