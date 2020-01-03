<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays - métodos de pesquisa</title>
</head>
<body>
    <h1>Métodos de pesquisa - PHP</h1>

    <?php

        $lista_frutas = ['Banana',  'Maçã', 'Uva'];
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';
        // in_array() => retorna true ou false dependendo da existência ou não do que está sendo passado
        // array_search() => retorna o indice do valor pesquisado, caso ele exista

        in_array('Maçã', $lista_frutas);
        //true = 1;
        //false = vazio

        array_search('Morango', $lista_frutas);
        // caso não encontrado o valor retornado é "null", sendo o texto = vazio
        
    ?>
</body>
</html>