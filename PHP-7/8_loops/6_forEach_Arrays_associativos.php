<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops - forEach</title>
</head>
<body>
    <h1>Loops - forEach em arrays associativos</h1>

    <?php
        $nomes = array ('joao' => 'João', 'Maria', 'Julia');
        $funcionarios = [['Nome' => 'João', 'Salário' => 2500],
            ['Nome' => 'Maria', 'Salário' => 3600]                
        ];

        // foreach ($nomes as $idx => $nome) {
        //     echo "$idx - $nome<br />";
        // }

        foreach ($funcionarios as $funcionario) {
            foreach ($funcionario as $nome => $valor) {
                echo "$nome - $valor <br />";
            }
        }
    ?>
</body>
</html>