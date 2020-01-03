<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio para fixação</title>
</head>
<body>
    <h1>Exercicio para fixação</h1>

    <p>Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos
        numéricos aleatórios entre 1 e 60, simulando o funcionamento do sorteio da mega sena.
        Atente-se ao fato de que os números aleatórios contidos dentro do array não podem ser repetidos.
    </p>
    <?php
        $numbers = array();

        while (count($numbers) < 6) {
            $num = rand(1, 60);
            if (! in_array($num, $numbers)) {
                echo "$num ";
                array_push($numbers, $num);
            }
        }
    ?>
</body>
</html>