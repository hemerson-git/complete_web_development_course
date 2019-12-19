<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casting de tipos - PHP</title>
</head>
<body>
    <?php 
        //gettype() => retorna o tipo da variável

        $valor = 10;
        $valor2 = (float) $valor; //float,  double, real
        $valor3 = (string) $valor;

        echo $valor. ' ' . gettype($valor);
        echo '<br/>';
        echo $valor2. ' ' . gettype($valor2);
        echo '<br/>';
        echo $valor3. ' ' . gettype($valor3);
    ?>
</body>
</html>