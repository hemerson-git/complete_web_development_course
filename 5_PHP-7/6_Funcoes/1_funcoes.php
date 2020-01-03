<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções PHP</title>
</head>
<body>
    <?php
        //Void (Sem retorno)
        function exibirBoasVindas() {
            echo 'Seja bem vindo';
            echo '<br/>';
        }

        exibirBoasVindas();

        //return (Com retorno)
        function calcularArea($alt, $larg) {
            $area = $alt * $larg;
            return $area;
        }

        echo 'A área total é de: ' . calcularArea(3, 4);

    ?>
</body>
</html>