<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops - do while</title>
</head>
<body>
    <h1>Loops - do while</h1>

    <?php
        $num1 = 10;

        do {
            echo $num1;
            echo '<br />';
            $num1 --;
        } while ($num1 > 0);
    ?>
</body>
</html>