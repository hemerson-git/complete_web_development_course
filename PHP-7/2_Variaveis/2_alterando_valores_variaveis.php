<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterando valores das variáveis</title>
</head>
<body>
    <?php 
        //String
        $nome = 'Hemerson Oliveira Silva';

        //int
        $idade = 22;

        //float
        $peso = 80.5;

        //boolean
        $fumante = false;

        //Em PHP a tipagem é dinamica
        $idade = '22';
    ?>

    <h1>Dados Cadastrais</h1>
    <p>Nome: <?=$nome?></p>
    <p>Idade: <?=$idade?></p>
    <p>Peso: <?=$peso?></p>
    <p>Fumante: <?=$fumante?></p>
</body>
</html>