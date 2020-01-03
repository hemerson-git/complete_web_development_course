<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções de manipulação de strings</title>
</head>
<body>
    
    <?php 
        $string = 'Funções nativas do PHP para manipulação de strings';

        //transforma todos os caracteres em minúculos
        echo strtolower($string);

        echo '<br/>';

        //transforma todos (ou quase todos) os caracteres em maiúsculas
        echo strtoupper($string);

        echo '<br/>';

        //transforma a primeira letra em maiúscula
        echo ucfirst($string);

        echo '<br/>';

        //Conta a quantidade de caracteres de uma string
        echo strlen($string);

        echo '<br/>';

        //Substitui uma cadeia de caracteres por outra dentro de uma string
        echo str_replace('manipulação', 'alteração', $string);    

        echo '<br/>';

        //Retorna parte de uma string
        echo substr($string, 0, 4);

    ?>
</body>
</html>