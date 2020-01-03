<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concatenação em PHP</title>
</head>

<body>
    <?php
        $nome = 'Hemerson';
        $cor = 'preto';
        $idade = 22;
        $laser = 'jogar videogame';

        //operador .
        echo 'Olá '. $nome .', estou vendo que você gosta de ' .$cor. ', estou vendo também que possui ' .$idade. ' anos e que gosta de '. $laser;

        echo '<br/>';

        //Usando aspas duplas é possível passar diretamente a variável na string
        echo "Olá $nome";
    ?>
</body>

</html>