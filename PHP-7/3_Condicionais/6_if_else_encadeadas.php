<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If e else encadeados PHP</title>
</head>

<body>
    <?php
        $usuario_possui_cartao_loja = true;
        $valor_compra = 255;
        $valor_frete = 50;

        if($usuario_possui_cartao_loja == true && $valor_compra >= 400) {
            $valor_frete = 0;
        } else if ($usuario_possui_cartao_loja == true && $valor_compra >= 300){
            $valor_frete = 10;
        } else if ($usuario_possui_cartao_loja == true && $valor_compra >= 200) {
            $valor_frete = 25;
        } else {
            //
        }
    ?>

    <h1>Detalhes do pedido</h1>

    <p>
        Possui cartão da loja:
        <?php
            if ($usuario_possui_cartao_loja === true) {
                echo 'Sim';
            } else {
                echo 'Não';
            }
        ?>
    </p>

</body>

</html>