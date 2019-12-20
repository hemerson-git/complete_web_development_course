<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays básicos</title>
</head>
<body>
    <h1>Arrays básicos - Introdução</h1>
    <?php
        $lista_frutas = array('Banana', 'Maçã', 'Uva', 'Abacate');

        echo '<pre>';
            var_dump($lista_frutas);
        echo '</pre>';
        echo '<hr/>';
        print_r($lista_frutas);
        echo '<hr/>';
        
        //associativos
        $lista_objetos = ['Colher', 'Garfo', 'Prato', 'Copo'];
        $lista_objetos['a'] = 'Xicara';
        echo '<pre>';
            var_dump($lista_objetos);
        echo '</pre>';
    ?>
</body>
</html>