<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio de Fixação</title>
</head>
<body>
    <?php
        $parametro = 2;

        switch ($parametro) {
            case 1:
                echo 'Entrou no case 1';
                break;
            case 2:
                echo 'Entrou no case 2';
                break;
            case 3:
                echo 'Entrou no case 3';
                break;
            default:
                echo 'Nenhuma condição foi atendida';
        }
    ?> 
</body>
</html>