<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays multidimensionais</title>
</head>
<body>
    <h1>Arrays multidimensionais</h1>
    <?php
        $coisas = array('frutas', 'pessoas');
        $coisas['frutas'] = array(1 => 'Maçã', 'Banana', 'Morango');
        $coisas['pessoas'] = array('Hemerson', 'Graziele', 'Karol');

        echo '<pre>'; 
        print_r($coisas['frutas']);
        echo '</pre>'; 
        echo '<pre>'; 
        print_r($coisas['pessoas']);
        echo '</pre>';  
    ?>
</body>
</html>