<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays - funções para manipulação</title>
</head>
<body>
    <?php
        // is_array() => verifica se o parametro é um array
        // array_keys() => retorna todas as chaves de um array
        // sort() => Ordena um array e reajusta seus indices 
        // asort() => Ordena um array preservando os seus indices
        // count() => conta a quantidade de itens em um array
        // array_merge() => funde um ou mais arrays
        // explode() => divide uma string baseada em um delimitador
        // implode() => junta os elementos de um array em uma string

        $array = ['Teclado',  'Mouse', 'Monitor', 'Cabo HDMI', 'fonte atx'];

        echo '<pre>'
            print_r($array);
        echo '</pre>'

        sort($array); //true ou false

        echo count($array);
        
        $array1 = ['Window', 'OSX'];
        $array2 = array('linux');
        $array3 = ['Solaris'];

        $novo_array = array_merge($array1, $array2, $array3);
        print_r($novo_array);

        $data = '27/01/2016';
        $array_de_retorno = explode('/', $data);
    ?>
</body>
</html>