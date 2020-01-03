<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções nativas para tarefas matemáticas</title>
</head>
<body>
    
    <?php 
        $num = 7.8;

        //arredonda pra cima
        echo ceil($num);
        echo '<br/>';
        
        //arredonda pra baixo
        echo floor($num);
        echo '<br/>';

        //arredonda
        echo round($num);
        echo '<br/>';

        //gera um número aleatório, pode ser expecificado o min e max nos parametros
        echo rand(0, 10);
        echo '<br/>';

        //Mostra o maior número randômico possível de ser gerado
        echo getrandmax();

        //retorna a raiz quadrada
        echo sqrt(9)
    ?>
</body>
</html>