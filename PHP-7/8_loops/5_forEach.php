<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops - forEach</title>
</head>
<body>
    <h1>Loops - forEach</h1>

    <?php
        $itens = array('Mesa', 'cadeira', 'fogão', 'geladeira');

        echo '<pre>';
            print_r($itens);
        echo '<pre/>';

        foreach ($itens as $item) {
            echo "$item </br>";
        }
    ?>
</body>
</html>