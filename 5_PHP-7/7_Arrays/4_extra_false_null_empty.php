<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extra - false, null e empty</title>
</head>
<body>
    <h1>Extra - false, null e empty</h1>
    <?php   
        // false (true/false) => Valores booleanos
        // empty, mull => valores de tipos especiais

        $funcionario1 = null;
        $funcionario2 = '';

        // valores null
        if($is_null($funcionario1)) {
            echo 'sim, funcionario é null';
        } else {
            echo 'não,o funcionario não é null';
        }

        echo '<br />';

        if(is_null($funcionario2)) {
            echo 'sim, a variável é null';
        } else {
            echo 'não, a variável não é null';
        }

        echo '<hr />';

        // valores vazios
        if(empty($funcionario1)) {
            echo 'sim, a variável está vazia';
        } else {
            echo 'não, a variável não está vazia';
        }
        
        echo '<br />';
        if(empty($funcionario2)) {
            echo 'sim, a variável está vazia';
        } else {
            echo 'não, a variável não está vazia';
        }

        ?>
</body>
</html>