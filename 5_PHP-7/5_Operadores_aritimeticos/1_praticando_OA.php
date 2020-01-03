<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operadores Aritmeticos na prática - PHP </title>
</head>
<body>
    <?php
        //Adição (+) - Soma valores
        //subtraçao (-) - Diferença entre valores
        //Multiplicação (*) - Produto dos valores 
        //Divisão (/) - Quociente dos valores
        //Módulo (%) - Resto da divisão

        $num_1 = 2;
        $num_2 = 5;

        echo  "A soma entre $num_1 e $num_2 é " . ($num_1 + $num_2);
        echo '<br/>';
        echo "A subtração entre $num_1 e $num_2 é " . ($num_1 - $num_2);
        echo '<br/>';
        echo "A multiplicação entre $num_1 e $num_2 resulta em " . ($num_1 * $num_2);
    ?>
</body>
</html>