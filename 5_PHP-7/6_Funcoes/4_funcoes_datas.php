<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções nativas para manipulação de datas</title>
</head>
<body>
    
    <?php 
        //recupera a data atual do sistema
        echo date('d/m/y D-M-Y > H:i');
        echo '<br/>';
        
        //Recupera a timezone atual
        echo date_default_timezone_get();
        echo '<br/>';
        
        //Configura a timezone atual para um timezone diferente
        date_default_timezone_set('America/Bahia');
        echo date('d/m/y D-M-Y > H:i');
        echo '<br/>';
        echo date_default_timezone_get();
        echo '<br/>';

        //Fazer calculos entre datas
        $initial_date = '2019-12-13';
        echo "data inicial - $initial_date";
        echo '<br/>';
        $final_date = '2019-12-25';
        echo "data final - $final_date";
        echo '<br/>';
        $initial_time = strtotime($initial_date);
        $final_time = strtotime($final_date);
        echo '<br/>';

        echo ($final_time - $initial_time) / 86400 . ' dias de diferença entra a data inicial e final';

    ?>
</body>
</html>