<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constantes em PHP</title>
</head>
<body>
    <?php 
        // A definição de constantes acontecem por uma funçao que recebe o nome e o valor da constante
        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');

        //também não é necessário passar nada pra chamar o nome da constante
        //ao tentar sobescrever o valor de uma constante, o PHP irá mostrar uma mensagem de erro

        echo BD_URL;
        echo '<br/>';
        echo BD_USUARIO;
        echo '<br/>';
        echo BD_SENHA;
    ?>
</body>
</html>